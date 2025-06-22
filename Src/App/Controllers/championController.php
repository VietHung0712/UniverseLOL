<?php

require_once "../../Public/Config/config.php";
require_once "../../Public/Config/entitiesConfig.php";
require_once "../../Public/Helpers/helper.php";
require_once "../../Public/Helpers/abstract.php";
require_once "../../Public/Helpers/championsHelper.php";
require_once "../../Public/Helpers/regionsHelper.php";
require_once "../../Public/Helpers/rolesHelper.php";
require_once "../../Public/Helpers/relationsHelper.php";
require_once "../../Public/Helpers/skinsHelper.php";

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
