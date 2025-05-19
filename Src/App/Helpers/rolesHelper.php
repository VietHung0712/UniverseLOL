<?php
require_once "../Models/roleClass.php";

use UniverseLOL\Role;

class RolesHelper
{
    private static function fetchRoles(mysqli_stmt $stmt): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $arr[] = new Role(
                    $row['id'],
                    $row['name'],
                    $row['icon'],
                );
            }
        } else {
            throw new Exception("Error $stmt: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    private static function getRoles(mysqli $connect, string $value = ''): array
    {
        $query = "SELECT * FROM roles";
        $stmt = null;
        if (trim($value) !== "") {
            $query .= " WHERE id = ?";
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
        return self::fetchRoles($stmt);
    }

    public static function getRoleById(mysqli $connect, string $value): ?Role
    {
        return self::getRoles($connect, $value)[0] ?? null;
    }

    function getAllRoles(mysqli $connect): array
    {
        return self::getRoles($connect);
    }
}
