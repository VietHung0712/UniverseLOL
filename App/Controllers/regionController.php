<?php
require_once "../App/Config/database.php";
require_once "../App/Helpers/regionsHelper.php";
require_once "../App/Helpers/championsHelper.php";
$regionId = $_GET['region'];
getRegion($connect, $regionId, $this_region);
getChampionByRegion($connect, $this_region->getId(), $champions);
mysqli_close($connect);