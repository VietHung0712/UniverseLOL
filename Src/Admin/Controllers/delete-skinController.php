<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $champion = $_POST['champion'];

    $database = new Database();
    $connect = $database->connect();

    $query = "DELETE FROM skins WHERE id = ?";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        header("Location: ../Views/skins.php?champion=$champion");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
