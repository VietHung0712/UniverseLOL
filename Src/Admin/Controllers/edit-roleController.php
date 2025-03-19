<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $icon = $_POST['icon'];

    $database = new Database();
    $connect = $database->connect();

    $query = "UPDATE roles SET icon = ? WHERE id = ?";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("ss", $icon, $id);

    if ($stmt->execute()) {
        header("Location: ../Views/roles.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
