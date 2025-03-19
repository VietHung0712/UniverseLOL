<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $database = new Database();
    $connect = $database->connect();

    $query = "DELETE FROM regions WHERE id = ?";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        header("Location: ../Views/regions.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
