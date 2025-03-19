<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $champion = $_POST['champion'];
    $name = $_POST['name'];
    $splash_art = $_POST['splash_art'];

    $database = new Database();
    $connect = $database->connect();

    $query = "UPDATE skins SET name = ?, splash_art = ?
              WHERE id = ?";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("sss", $name, $splash_art, $id);

    if ($stmt->execute()) {
        header("Location: ../Views/skins.php?champion=$champion");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
