<?php

use UniverseLOL\Region;

require_once  __DIR__ . "/../../Core/Config/config.php";
require_once  __DIR__ . "/../../Core/Config/entitiesConfig.php";
require_once  __DIR__ . "/../../Core/Helpers/helper.php";
require_once  __DIR__ . "/../../Core/Helpers/abstract.php";
require_once  __DIR__ . "/../../Core/Helpers/regionsHelper.php";
require_once  __DIR__ . "/../../Core/Helpers/mapsHelper.php";
$config = new Config();
$connect = $config->connect();

$regionCols = [
    RegionConfig::ID->value,
    RegionConfig::NAME->value,
    RegionConfig::TITLE->value,
    RegionConfig::ICON->value,
    RegionConfig::AVATAR->value,
    RegionConfig::BACKGROUND->value
];
$regions = RegionsHelper::getData($connect, $regionCols);
$maps = MapsHelper::getMapsForRegion($connect);

$connect->close();
