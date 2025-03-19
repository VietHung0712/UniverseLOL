<?php
require_once "../../Core/Config/database.php";
require_once "../../Core/Helpers/regionsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllRegions($connect, $regions);
$connect->close();