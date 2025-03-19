<?php
require_once "../../Core/Models/skinClass.php";

use UniverseLOL\Skin;

function getSkins($connect, $id, &$array)
{
    $stmt = $connect->prepare("SELECT * FROM skins WHERE champion = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = new Skin(
                    $row['id'],
                    $row['champion'],
                    $row['name'],
                    $row['splash_art'],
                );
                $array[] = $object;
            }
        }
    } else {
        die("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}
