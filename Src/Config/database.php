<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leagueoflegends";

try {
    $connect = mysqli_connect($servername, $username, $password, $dbname);
} catch (\Throwable $th) {
}
