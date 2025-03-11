<?php
require_once "./App/Database/connect.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM administrator WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    if ($result->num_rows > 0) {
        header("Location: ./admin.php");
        exit();
    } else {
        echo "<script>alert('Sai tài khoản hoặc mật khẩu!')</script>";
    }
}
mysqli_close($connect);
