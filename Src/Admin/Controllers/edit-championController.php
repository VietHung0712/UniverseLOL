<?php
require_once "../../Config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
    $stmt->bind_param("ssssssssiis", $name, $region, $role, $title, $voice, $story, $splash_art, $animated_splash_art, $position_x, $position_y, $id);

    if ($stmt->execute()) {
        header("Location: ../Views/champions.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
