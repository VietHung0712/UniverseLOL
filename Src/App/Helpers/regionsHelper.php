<?php
require_once "../Models/regionClass.php";

use UniverseLOL\Region;

class RegionsHelper
{
    private static function fetchRegions(mysqli_stmt $stmt): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $arr[] = new Region(
                    $row['id'],
                    $row['name'],
                    $row['title'],
                    $row['story'],
                    $row['icon'],
                    $row['avatar'],
                    $row['background'],
                    $row['animated_background']
                );
            }
        } else {
            throw new Exception("Error $stmt: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    public static function getRegions(mysqli $connect, string $id = ''): array
    {
        $query = "SELECT * FROM regions";
        $stmt = null;
        if (trim($id) !== "") {
            $query .= " WHERE id = ?";
            $stmt = $connect->prepare($query);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
            $stmt->bind_param("s", $id);
        } else {
            $stmt = $connect->prepare($query);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
        }
        return self::fetchRegions($stmt);
    }

    public static function getAllRegions(mysqli $connect): array
    {
        return self::getRegions($connect);
    }

    public static function getRegionById(mysqli $connect, $id): ?Region
    {
        return self::getRegions($connect, $id)[0] ?? null;
    }

    public static function getNameAllRegions(mysqli $connect): array
    {
        $result = [];
        $arr = self::getAllRegions($connect);
        foreach ($arr as $item) {
            $result[$item->getId()] = $item->getName();
        }
        return $result;
    }
}
