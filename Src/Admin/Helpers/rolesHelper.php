<?php
require_once "../Models/roleClass.php";

use UniverseLOL\Role;

function getAllRole($connect, &$roles)
{
    $stmt = $connect->prepare("SELECT * FROM roles");

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $role = new Role(
                    $row['id'],
                    $row['name'],
                    $row['icon'],
                );
                $roles[] = $role;
            }
        }
    } else {
        die("Lỗi truy vấn: " . $stmt->error);
    }
    $stmt->close();
}
