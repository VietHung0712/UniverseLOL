<?php
require_once __DIR__ . "/../../Core/Config/config.php";
require_once __DIR__ . "/../../Core/Config/entitiesConfig.php";
require_once __DIR__ . "/../../Core/Helpers/helper.php";
require_once __DIR__ . "/../../Core/Helpers/abstract.php";
require_once __DIR__ . "/../../Core/Helpers/regionsHelper.php";

$config = new Config();
$connect = $config->connect();
$cols = [
    RegionConfig::ID->value,
    RegionConfig::NAME->value,
    RegionConfig::ICON->value,
    RegionConfig::BACKGROUND->value,
];
$regions = RegionsHelper::getData($connect, $cols);
$connect->close();
