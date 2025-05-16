<?php
require_once "../../Core/Config/config.php";
require_once "../../Core/Helpers/regionsHelper.php";
require_once "../../Core/Helpers/championsHelper.php";
$config = new Config();
$connect = $config->connect();
$regionId = $_GET['region'];
getRegion($connect, $regionId, $this_region);
getChampionByRegion($connect, $this_region->getId(), $champions);
$connect->close();