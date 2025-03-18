<?php
require_once "../../Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $champion_id = $_POST['champion_id'];

    $database = new Database();
    $connect = $database->connect();

    $query = "DELETE FROM relations WHERE id = ?";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        header("Location: ../Views/relations.php?champion_id=$champion_id");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
