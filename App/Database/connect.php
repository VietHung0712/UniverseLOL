<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leagueoflegends";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}
