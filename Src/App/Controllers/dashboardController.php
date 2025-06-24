<?php
require_once __DIR__ . "/../../Core/Config/config.php";
require_once __DIR__ . "/../../Core/Config/entitiesConfig.php";
require_once __DIR__ . "/../../Core/Helpers/helper.php";
require_once __DIR__ . "/../../Core/Helpers/abstract.php";
require_once __DIR__ . "/../../Core/Helpers/championsHelper.php";

$cols = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::TITLE->value,
    ChampionConfig::SPLASHART->value,
    ChampionConfig::POSITIONX->value,
    ChampionConfig::POSITIONY->value,
];
$config = new Config();
$connect = $config->connect();
$champions = ChampionsHelper::getDataSortByUpdatedDate($connect, $cols);
$connect->close();