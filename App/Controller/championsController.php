<?php
require_once "./App/Database/connect.php";
require_once "./App/Helper/championsHelper.php";
require_once "./App/Helper/regionsHelper.php";
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);

