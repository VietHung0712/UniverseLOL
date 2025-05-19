<?php
require_once "../Models/relationClass.php";

use UniverseLOL\Relation;

class RelationsHelper
{
    private static function fetchRelations(mysqli_stmt $stmt): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $arr[] = new Relation(
                    $row['id'],
                    $row['champion_id'],
                    $row['related_id'],
                    $row['relation_type']
                );
            }
        } else {
            throw new Exception("Error $stmt: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    public static function getRelations(mysqli $connect, string $value): array
    {
        $query = "SELECT * FROM relations WHERE champion_id = ?";
        $stmt = $connect->prepare($query);
        if (!$stmt) {
            throw new Exception("Error $stmt: " . $connect->error);
        }
        $stmt->bind_param("s", $value);
        return self::fetchRelations($stmt);
    }
}
