<?php
require_once "../Models/skinClass.php";

use UniverseLOL\Skin;

class SkinsHelper
{
    private static function fetchSkins(mysqli_stmt $stmt): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $arr[] = new Skin(
                    $row['id'],
                    $row['champion_id'],
                    $row['name'],
                    $row['splash_art']
                );
            }
        } else {
            throw new Exception("Error $stmt: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    private static function getSkins(mysqli $connect, string $column = '', string $value = ''): array
    {
        $query = "SELECT * FROM skins";
        $stmt = null;
        if (trim($column) !== "") {
            $query .= " WHERE $column = ?";
            $stmt = $connect->prepare($query);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
            $stmt->bind_param("s", $value);
        } else {
            $stmt = $connect->prepare($query);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
        }
        return self::fetchSkins($stmt);
    }

    public static function getSkinsByChampionId(mysqli $connect, string $value) : array
    {
        return self::getSkins($connect, 'champion_id', $value);
    }

    public static function getSkinsById(mysqli $connect, string $value) : array
    {
        return self::getSkins($connect, 'id', $value);
    }
}
