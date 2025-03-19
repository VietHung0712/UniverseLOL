<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $story = $_POST['story'];
    $icon = $_POST['icon'];
    $avatar = $_POST['avatar'];
    $background = $_POST['background'];
    $animated_background = $_POST['animated_background'];

    $database = new Database();
    $connect = $database->connect();

    $query = "INSERT INTO regions(id, name, story, icon, avatar, background, animated_background)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("sssssss", $id, $name, $story, $icon, $avatar, $background, $animated_background);

    if ($stmt->execute()) {
        header("Location: ../Views/regions.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
