<?php
require_once "../Models/championClass.php";

use UniverseLOL\Champion;

class ChampionsHelper
{
    private static function fetchChampions(mysqli_stmt $stmt): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $arr[] = new Champion(
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
            throw new Exception("Error $stmt: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    private static function getChampions(mysqli $connect, string $column = '', string $value = ''): array
    {
        $query = "SELECT * FROM champions";
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
        return self::fetchChampions($stmt);
    }

    public static function getAllChampions(mysqli $connect): array
    {
        return self::getChampions($connect);
    }

    public static function getChampionById($connect, $value): ?Champion
    {
        return self::getChampions($connect, 'id', $value)[0] ?? null;
    }

    public static function getChampionsByRegion($connect, $region): array
    {
        return self::getChampions($connect, 'region', $region);
    }
}
