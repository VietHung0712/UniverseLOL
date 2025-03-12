<?php
require_once "../../Config/database.php";
require_once "../Helpers/regionsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllRegions($connect, $regions);
$connect->close();