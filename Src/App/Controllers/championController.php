<?php

require_once "../Config/config.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/rolesHelper.php";
require_once "../Helpers/relationsHelper.php";
require_once "../Helpers/skinsHelper.php";

$config = new Config();
$connect = $config->connect();
$championId = $_GET['champion'];
$this_champion = ChampionsHelper::getChampionById($connect, [], $championId)[0];
$relationsArr = RelationsHelper::getRelationsByChampionId($connect, [], $championId);
$role = RolesHelper::getRoleById($connect, [], $this_champion->getRole());
$skinsArr = SkinsHelper::getSkinsByChampionId($connect, [], $championId);


$regionColumns = [
    RegionConfig::ID->value,
    RegionConfig::NAME->value,
    RegionConfig::ICON->value,
    RegionConfig::AVATAR->value,
    RegionConfig::BACKGROUND->value
];
$region = RegionsHelper::getRegionById($connect, $regionColumns, $this_champion->getRegion());

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
        $championRelationsArr[] = ChampionsHelper::getChampionById($connect, $championColumns, $item->getRelatedId())[0];
    }
}
$connect->close();
