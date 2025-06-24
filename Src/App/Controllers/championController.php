<?php

require_once __DIR__ . "/../../Core/Config/config.php";
require_once __DIR__ . "/../../Core/Config/entitiesConfig.php";
require_once __DIR__ . "/../../Core/Helpers/helper.php";
require_once __DIR__ . "/../../Core/Helpers/abstract.php";
require_once __DIR__ . "/../../Core/Helpers/championsHelper.php";
require_once __DIR__ . "/../../Core/Helpers/regionsHelper.php";
require_once __DIR__ . "/../../Core/Helpers/rolesHelper.php";
require_once __DIR__ . "/../../Core/Helpers/relationsHelper.php";
require_once __DIR__ . "/../../Core/Helpers/skinsHelper.php";

$config = new Config();
$connect = $config->connect();
$championId = $_GET['champion'];
$this_champion = ChampionsHelper::getDataById($connect, $championId);
$relationsArr = RelationsHelper::getDataByChampionId($connect, $championId);
$role = RolesHelper::getDataById($connect, $this_champion->getRole());
$skinsArr = SkinsHelper::getDataByChampionId($connect, $this_champion->getId());


$regionColumns = [
    RegionConfig::ID->value,
    RegionConfig::NAME->value,
    RegionConfig::ICON->value,
    RegionConfig::AVATAR->value,
    RegionConfig::BACKGROUND->value
];
$region = RegionsHelper::getDataById($connect, $this_champion->getRegion(), $regionColumns);

$championRelationsArr = [];
$championColumns = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::REGION->value,
    ChampionConfig::SPLASHART->value,
    ChampionConfig::POSITIONX->value,
    ChampionConfig::POSITIONY->value
];
if (isset($relationsArr) && !empty($relationsArr)) {
    foreach ($relationsArr as $item) {
        $championRelationsArr[] = ChampionsHelper::getDataById($connect, $item->getRelatedId(), $championColumns);
    }
}
$connect->close();
