<?php
require_once __DIR__ . "/../../Core/Config/config.php";
require_once __DIR__ . "/../../Core/Config/entitiesConfig.php";
require_once __DIR__ . "/../../Core/Helpers/helper.php";
require_once __DIR__ . "/../../Core/Helpers/abstract.php";
require_once __DIR__ . "/../../Core/Helpers/championsHelper.php";
require_once __DIR__ . "/../../Core/Helpers/regionsHelper.php";

$config = new Config();
$connect = $config->connect();
$regionId = $_GET['region'];
$this_region = RegionsHelper::getDataById($connect, $regionId);

$cols = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::REGION->value,
    ChampionConfig::SPLASHART->value,
    ChampionConfig::POSITIONX->value,
    ChampionConfig::POSITIONY->value
];
$regionChampionsArr = ChampionsHelper::getDataByRegionId($connect, $this_region->getId(), $cols);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);
$connect->close();
