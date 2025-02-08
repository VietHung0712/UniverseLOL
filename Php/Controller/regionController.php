<?php
require_once "./Php/Database/connect.php";
require_once "./Php/Helper/regionsHelper.php";
require_once "./Php/Helper/championsHelper.php";
$regionId = $_GET['region'];
getRegion($connect, $regionId, $this_region);
getChampionByRegion($connect, $this_region->getId(), $champions);
