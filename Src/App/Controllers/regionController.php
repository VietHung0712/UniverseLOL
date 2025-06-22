<?php
require_once "../../Public/Config/config.php";
require_once "../../Public/Config/entitiesConfig.php";
require_once "../../Public/Helpers/helper.php";
require_once "../../Public/Helpers/abstract.php";
require_once "../../Public/Helpers/championsHelper.php";
require_once "../../Public/Helpers/regionsHelper.php";

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
