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

    private static function stringQuery(array $columns = [], string $table): string
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

    private static function stringQueryFind(array $columns, string $table, string $filterfield): string
    {
        $query = self::stringQuery($columns, $table);
        $query .= " WHERE $filterfield = ?";
        return $query;
    }

    public static function getEntities(mysqli $connect, string $className, array $fields, array $columns, string $table): array
    {
        $query = self::stringQuery($columns, $table);
        $stmt = $connect->prepare($query);
        if (!$stmt) {
            throw new Exception("Error preparing query: " . $connect->error);
        }
        return self::fetchEntities($stmt, $fields, $className);
    }

    public static function getEntitiesFindByField(mysqli $connect, string $className, array $fields, array $columns, string $table, string $filterfield, string $value): array
    {
        $query = self::stringQueryFind($columns, $table, $filterfield);
        $stmt = $connect->prepare($query);
        if (!$stmt) {
            throw new Exception("Error preparing query: " . $connect->error);
        }
        $stmt->bind_param("s", $value);
        return self::fetchEntities($stmt, $fields, $className);
    }
}
