<?php
require_once "../App/Models/relateClass.php";

use UniverseLOL\Relate;

function getAllRelations($connect, &$array)
{
    $result = $connect->query("SELECT * FROM relate");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $object = new Relate(
                $row['id'],
                $row['champion_id'],
                $row['related_id'],
                $row['relation_type']
            );
            $array[] = $object;
        }
    } else {
        echo "Không tìm thấy.";
    }
}

function getRelations($connect, $id,  &$array)
{
    $stmt = $connect->prepare("SELECT * FROM relations WHERE champion_id = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = new Relate(
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
