<?php
require_once "../Models/regionClass.php";

use UniverseLOL\Region;

function getAllRegions($connect, &$regions)
{
    $result = $connect->query("SELECT * FROM regions");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $region = new Region(
                $row['id'],
                $row['name'],
                $row['story'],
                $row['icon'],
                $row['avatar'],
                $row['background'],
                $row['animated_background']
            );
            $regions[] = $region;
        }
    } else {
        echo "Không tìm thấy region nào.";
    }
}

function getRegion($connect, $value,  &$region)
{
    $stmt = $connect->prepare("SELECT * FROM regions WHERE id = ?");
    $stmt->bind_param("s", $value);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $region = new Region(
                    $row['id'],
                    $row['name'],
                    $row['story'],
                    $row['icon'],
                    $row['avatar'],
                    $row['background'],
                    $row['animated_background']
                );
            }
        }
    } else {
        die("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}

function getRegionName($regionId)
{
    global $regions;
    $value = "";
    if (is_array($regions) && !empty($regions)) {
        foreach ($regions as $region) {
            if ($region->getId() == $regionId) {
                $value = $region->getName();
            }
        }
    }
    return $value;
}