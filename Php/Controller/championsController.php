<?php
require_once "./Php/Database/connect.php";
require_once "./Php/Helper/championsHelper.php";
require_once "./Php/Helper/regionsHelper.php";
getAllChampions($connect, $champions);
getAllRegions($connect, $regions);

