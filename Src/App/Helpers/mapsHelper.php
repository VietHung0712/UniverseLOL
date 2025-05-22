<?php
require_once "../Models/mapClass.php";

use UniverseLOL\Map;

class MapsHelper
{
    private static function fetchMaps(mysqli_stmt $stmt): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $arr[] = new Map(
                    $row['id'],
                    $row['region_id'],
                    $row['points']
                );
            }
        } else {
            throw new Exception("Error $stmt: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    private static function getMaps(mysqli $connect, string $value = ''): array
    {
        $query = "SELECT * FROM maps";
        $stmt = null;
        if (trim($value) !== "") {
            $query .= " WHERE region_id = ?";
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
        return self::fetchMaps($stmt);
    }

    public static function getAllMaps(mysqli $connect): array
    {
        return self::getMaps($connect);
    }

    public static function getRegionMaps(mysqli $connect, string $value): array
    {
        return self::getMaps($connect, $value);
    }

    public static function getMapsForRegion(mysqli $connect): array
    {
        $arr = self::getAllMaps($connect);
        $result = [];
        foreach ($arr as $item) {
            $regionId = $item->getRegionId();
            $points = trim($item->getPoints());
            if (!isset($result[$regionId])) {
                $result[$regionId] = [];
            }
            $result[$regionId][] = $points;
        }
        return $result;
    }
}
