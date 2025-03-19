<?php
require_once "../../Core/Config/database.php";
require_once "../../Core/Helpers/championsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllChampions($connect, $champions);
$connect->close();
