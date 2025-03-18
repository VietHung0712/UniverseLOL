<?php
require_once "../../Config/database.php";
require_once "../Helpers/championsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllChampions($connect, $champions);
$connect->close();
