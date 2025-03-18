<?php
require_once "../../Config/database.php";
require_once "../../App/Helpers/championsHelper.php";
$database = new Database();
$connect = $database->connect();
getAllChampions($connect, $champions);
$connect->close();
