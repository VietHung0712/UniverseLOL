<?php
require_once "../Config/config.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";

$cols = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::REGION->value,
    ChampionConfig::SPLASHART->value,
    ChampionConfig::POSITIONX->value,
    ChampionConfig::POSITIONY->value
];
$config = new Config();
$connect = $config->connect();
$champions = ChampionsHelper::getChampions($connect, $cols);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);
$connect->close();
