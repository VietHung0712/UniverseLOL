<?php
require_once "../Models/Champion.php";
require_once "../Config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $region = $_POST["region"];
    $role = $_POST["role"];
    $title = $_POST["title"];
    $voice = $_POST["voice"];
    $story = $_POST["story"];
    $splash_art = $_POST["splash_art"];
    $animated_splash_art = $_POST["animated_splash_art"];
    $position_x = $_POST["position_x"];
    $position_y = $_POST["position_y"];

    $database = new Database();
    $connect = $database->connect();

    $sql = "UPDATE champions SET 
                name = ?, region = ?, role = ?, title = ?, 
                voice = ?, story = ?, splash_art = ?, animated_splash_art = ?, 
                position_x = ?, position_y = ? 
            WHERE id = ?";

    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssssssssddi", $name, $region, $role, $title, $voice, $story, $splash_art, $animated_splash_art, $position_x, $position_y, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Cập nhật thành công!'); window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Lỗi cập nhật!');</script>";
    }

    $stmt->close();
    $connect->close();
} else {
    echo "<script>alert('Yêu cầu không hợp lệ!'); window.location.href='../index.php';</script>";
}
