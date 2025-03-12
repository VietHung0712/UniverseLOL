<?php
require_once "../../Config/database.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);
$connect->close();