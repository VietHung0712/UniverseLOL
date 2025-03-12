<?php
require_once "../../Config/database.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/rolesHelper.php";

$championId = $_GET['champion'];
getChampionById($connect, $championId,  $this_champion);
getAllRegions($connect, $regions);
getAllRole($connect, $roles);
mysqli_close($connect);