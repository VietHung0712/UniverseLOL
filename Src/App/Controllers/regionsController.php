<?php
require_once "../Config/config.php";
require_once "../Helpers/regionsHelper.php";

$config = new Config();
$connect = $config->connect();
$cols = [
    RegionConfig::ID->value,
    RegionConfig::NAME->value,
    RegionConfig::ICON->value,
    RegionConfig::BACKGROUND->value,
];
$regions = RegionsHelper::getRegions($connect, $cols);
$connect->close();
