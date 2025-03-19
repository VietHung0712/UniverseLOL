<?php
require_once "../../Core/Config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $champion_id = $_POST['champion_id'];
    $related_id = $_POST['related_id'];
    $relation_type = $_POST['relation_type'];

    $database = new Database();
    $connect = $database->connect();

    $query = "UPDATE relations SET related_id = ?, relation_type = ?
              WHERE id = ?";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("sss", $related_id, $relation_type, $id);

    if ($stmt->execute()) {
        header("Location: ../Views/relations.php?champion_id=$champion_id");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
