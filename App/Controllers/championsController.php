<?php
require_once "../App/Config/database.php";
require_once "../App/Helpers/championsHelper.php";
require_once "../App/Helpers/regionsHelper.php";
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);
mysqli_close($connect);

