<?php
require_once "../Models/championClass.php";

use UniverseLOL\Champion;

class ChampionsHelper
{
    private static function fetchChampions(mysqli_stmt $stmt): array
    {
        $champions = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $champions[] = new Champion(
                    $row['id'],
                    $row['name'],
                    $row['region'],
                    $row['role'],
                    $row['title'],
                    $row['voice'],
                    $row['story'],
                    $row['splash_art'],
                    $row['animated_splash_art'],
                    $row['position_x'],
                    $row['position_y']
                );
            }
        } else {
            error_log("Query error: " . $stmt->error);
        }
        $stmt->close();
        return $champions;
    }

    private static function getChampions(mysqli $connect, string $column = '', string $value = ''): array
    {
        $sql = "SELECT * FROM champions";
        $stmt = null;
        if (trim($column) !== "") {
            $sql .= " WHERE $column = ?";
            $stmt = $connect->prepare($sql);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
            $stmt->bind_param("s", $value);
        } else {
            $stmt = $connect->prepare($sql);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
        }
        return self::fetchChampions($stmt);
    }

    public static function getAllChampions(mysqli $connect): array
    {
        return self::getChampions($connect);
    }

    public static function getChampionById($connect, $id): ?Champion
    {
        return self::getChampions($connect, 'id', $id)[0] ?? null;
    }

    public static function getChampionsByRegion($connect, $region): ?array
    {
        return self::getChampions($connect, 'region', $region);
    }
}
