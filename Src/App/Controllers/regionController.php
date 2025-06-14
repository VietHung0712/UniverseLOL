<?php
require_once "../Config/config.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/championsHelper.php";
$config = new Config();
$connect = $config->connect();
$regionId = $_GET['region'];
$this_region = RegionsHelper::getRegionById($connect, [], $regionId);

$cols = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::REGION->value,
    ChampionConfig::SPLASHART->value,
    ChampionConfig::POSITIONX->value,
    ChampionConfig::POSITIONY->value
];
$regionChampionsArr = ChampionsHelper::getChampionsByRegionId($connect, $cols, $regionId);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);
$connect->close();
