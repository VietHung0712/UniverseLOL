<?php
require_once "../Config/config.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/championsHelper.php";
$config = new Config();
$connect = $config->connect();
$regionId = $_GET['region'];
$this_region = RegionsHelper::getRegionById($connect, $regionId);
$regionChampionsArr = ChampionsHelper::getChampionsByRegion($connect, $regionId);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);
$connect->close();