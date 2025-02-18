<?php
require_once "./App/Database/connect.php";
require_once "./App/Helpers/championsHelper.php";
require_once "./App/Helpers/regionsHelper.php";
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);

