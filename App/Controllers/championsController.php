<?php
require_once "../Config/database.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);
mysqli_close($connect);

