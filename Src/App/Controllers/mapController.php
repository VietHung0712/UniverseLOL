<?php
require_once "../Config/config.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/mapsHelper.php";
$config = new Config();
$connect = $config->connect();
$regions = RegionsHelper::getRegions($connect, []);
$maps = MapsHelper::getMapsForRegion($connect);

$connect->close();
