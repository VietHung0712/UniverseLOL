<?php
require_once "../Models/regionClass.php";

use UniverseLOL\Region;

class RegionsHelper
{
    private static function fetchRegions(mysqli_stmt $stmt): array
    {
        $regions = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $regions[] = new Region(
                    $row['id'],
                    $row['name'],
                    $row['story'],
                    $row['icon'],
                    $row['avatar'],
                    $row['background'],
                    $row['animated_background']
                );
            }
        } else {
            error_log("Query error: " . $stmt->error);
        }
        $stmt->close();
        return $regions;
    }

    public static function getRegions(mysqli $connect, string $id = ''): array
    {
        $sql = "SELECT * FROM regions";
        $stmt = null;
        if (trim($id) !== "") {
            $sql .= " WHERE id = ?";
            $stmt = $connect->prepare($sql);
            if (!$stmt) {
                throw new Exception("Error $stmt: " . $connect->error);
            }
            $stmt->bind_param("s", $id);
        } else {
            $stmt = $connect->prepare($sql);
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
        $regions = self::getAllRegions($connect);
        foreach ($regions as $region) {
            $result[$region->getId()] = $region->getName();
        }
        return $result;
    }
}
