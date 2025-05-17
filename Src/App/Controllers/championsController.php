<?php
require_once "../Config/config.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";
$config = new Config();
$connect = $config->connect();
$champions = ChampionsHelper::getAllChampions($connect);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);
$connect->close();
