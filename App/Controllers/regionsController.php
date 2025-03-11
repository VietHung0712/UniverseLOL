<?php
require_once "../Config/database.php";
require_once "../Helpers/regionsHelper.php";
getAllRegions($connect, $regions);
mysqli_close($connect);