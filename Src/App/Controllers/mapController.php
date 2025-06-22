<?php
require_once "../../Public/Config/config.php";
require_once "../../Public/Helpers/helper.php";
require_once "../../Public/Config/entitiesConfig.php";
require_once "../../Public/Helpers/regionsHelper.php";
require_once "../../Public/Helpers/mapsHelper.php";
$config = new Config();
$connect = $config->connect();
$regions = RegionsHelper::getRegions($connect, []);
$maps = MapsHelper::getMapsForRegion($connect);

$connect->close();
