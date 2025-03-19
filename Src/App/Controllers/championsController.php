<?php
require_once "../../Core/Config/database.php";
require_once "../../Core/Helpers/championsHelper.php";
require_once "../../Core/Helpers/regionsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);
$connect->close();