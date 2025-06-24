<?php

class Helper
{
    private static function fetchEntities(mysqli_stmt $stmt, array $fields, string $className): array
    {
        $arr = [];
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $args = [];
                foreach ($fields as $field) {
                    $args[] = $row[$field->value] ?? null;
                }
                $arr[] = new $className(...$args);
            }
        } else {
            throw new Exception("Error executing statement: " . $stmt->error);
        }
        $stmt->close();
        return $arr;
    }

    public static function getStmtPrepareQuery(mysqli $connect, string $query, string $value = ""): mysqli_stmt
    {
        $stmt = $connect->prepare($query);
        if (!$stmt) {
            throw new Exception("Error preparing query: " . $connect->error);
        }
        if (!empty($value)) {
            $stmt->bind_param("s", $value);
        }
        return $stmt;
    }

    public static function stringQuery(string $table, array $columns = []): string
    {
        $cols = '*';
        if (!empty($columns)) {
            $filtered = array_filter($columns, fn($value) => !empty($value));
            if (!empty($filtered)) {
                $cols = implode(',', $filtered);
            }
        };
        $query = "SELECT $cols FROM $table";
        return $query;
    }

    public static function stringQueryFind(string $query, string $filterfield): string
    {
        $query .= " WHERE $filterfield = ?";
        return $query;
    }

    public static function stringQuerySearch(string $query, string $filterfield): string
    {
        $query .= " WHERE $filterfield LIKE %?%";
        return $query;
    }

    public static function stringQuerySort(string $query, string $filterfield, bool $asc = true, int $limit = 0): string
    {
        $query .= " ORDER BY $filterfield";
        if (!$asc) {
            $query .= "  DESC";
        } else {
            $query .= "  ASC";
        }
        if ($limit > 0) {
            $query .= " LIMIT $limit";
        }
        return $query;
    }

    public static function getEntities(mysqli $connect, string $className, array $fields, string $query, string $value = ""): array
    {
        $stmt = self::getStmtPrepareQuery($connect, $query, $value);
        return self::fetchEntities($stmt, $fields, $className);
    }
}
