<?php
require_once "../../Config/database.php";
require_once "../Helpers/championsHelper.php";
getAllChampions($connect, $champions);
mysqli_close($connect);

