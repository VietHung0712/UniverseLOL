<?php
require_once "./Php/Class/championClass.php";

use UniverseLOL\Champion;

function getChampion($connect, $colums, $value,  &$array)
{
    $sql = "SELECT * FROM champions";
    if (trim($colums) != "") {
        $sql .= " WHERE $colums = ?";
    }
    $stmt = $connect->prepare($sql);
    if (trim($colums) != "") {
        $stmt->bind_param("s", $value);
    }

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = new Champion(
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
                $array[] = $object;
            }
        }
    } else {
        die("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}

function getAllChampions($connect, &$object)
{
    getChampion($connect, '', '',  $object);
}

function getChampionById($connect, $value,  &$object)
{
    getChampion($connect, 'id', $value,  $array);
    if(isset($array)){
        $object = $array[0];
    }
}

function getChampionByRegion($connect, $value,  &$object)
{
    getChampion($connect, 'region', $value,  $object);
}
