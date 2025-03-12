<?php
require_once "../../Config/database.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/championsHelper.php";
$database = new Database();
$connect = $database->connect();
$regionId = $_GET['region'];
getRegion($connect, $regionId, $this_region);
getChampionByRegion($connect, $this_region->getId(), $champions);
$connect->close();