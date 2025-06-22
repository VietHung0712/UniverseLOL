<?php
require_once "../../Public/Config/config.php";
require_once "../../Public/Config/entitiesConfig.php";
require_once "../../Public/Helpers/helper.php";
require_once "../../Public/Helpers/abstract.php";
require_once "../../Public/Helpers/championsHelper.php";
require_once "../../Public/Helpers/regionsHelper.php";

$cols = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::REGION->value,
    ChampionConfig::SPLASHART->value,
    ChampionConfig::POSITIONX->value,
    ChampionConfig::POSITIONY->value,
    ChampionConfig::RELEASEDATE->value
];
$config = new Config();
$connect = $config->connect();
$champions = ChampionsHelper::getData($connect, $cols);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);
$connect->close();
