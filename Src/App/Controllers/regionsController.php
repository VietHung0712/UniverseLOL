<?php
require_once "../../Public/Config/config.php";
require_once "../../Public/Config/entitiesConfig.php";
require_once "../../Public/Helpers/helper.php";
require_once "../../Public/Helpers/abstract.php";
require_once "../../Public/Helpers/regionsHelper.php";

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
