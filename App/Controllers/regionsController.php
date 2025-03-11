<?php
require_once "../App/Config/database.php";
require_once "../App/Helpers/regionsHelper.php";
getAllRegions($connect, $regions);
mysqli_close($connect);