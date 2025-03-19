<?php
require_once "../../Core/Config/database.php";
require_once "../../Core/Helpers/regionsHelper.php";
require_once "../../Core/Helpers/championsHelper.php";
$regionId = $_GET['region'];
getRegion($connect, $regionId, $this_region);
getChampionByRegion($connect, $this_region->getId(), $champions);
mysqli_close($connect);