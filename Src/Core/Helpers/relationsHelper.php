<?php
require_once "../../Core/Models/relationClass.php";

use UniverseLOL\Relation;

function getRelations($connect, $id,  &$array)
{
    $stmt = $connect->prepare("SELECT * FROM relations WHERE champion_id = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = new Relation(
                    $row['id'],
                    $row['champion_id'],
                    $row['related_id'],
                    $row['relation_type']
                );
                $array[] = $object;
            }
        }
    } else {
        throw new Exception("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}

function getRelationById($connect, $id,  &$object)
{
    $stmt = $connect->prepare("SELECT * FROM relations WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = new Relation(
                    $row['id'],
                    $row['champion_id'],
                    $row['related_id'],
                    $row['relation_type']
                );
            }
        }
    } else {
        throw new Exception("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}