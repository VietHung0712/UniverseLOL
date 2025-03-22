<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $champion = $_POST['champion'];
    $name = $_POST['name'];
    $splash_art = $_POST['splash_art'];

    $database = new Database();
    $connect = $database->connect();

    $query = "INSERT INTO skins(champion, name, splash_art) VALUES(?,?,?)";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("sss", $champion, $name, $splash_art);

    if ($stmt->execute()) {
        header("Location: ../Views/skins.php?champion=$champion");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
