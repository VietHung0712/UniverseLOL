<?php
require_once "../Config/config.php";
require_once "../Helpers/regionsHelper.php";
$config = new Config();
$connect = $config->connect();
$regions = RegionsHelper::getAllRegions($connect);
$connect->close();