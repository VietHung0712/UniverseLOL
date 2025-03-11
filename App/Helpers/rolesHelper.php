<?php
require_once "../App/Models/roleClass.php";

use UniverseLOL\Role;

function getRole($connect, $id,  &$object)
{
    $stmt = $connect->prepare("SELECT * FROM roles WHERE id = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = new Role(
                    $row['id'],
                    $row['name'],
                    $row['icon'],
                );
            }
        }
    } else {
        die("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}
