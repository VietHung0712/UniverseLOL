<?php
interface InterfaceHelper {
    public static function getData(mysqli $connect, array $columns = []): array;
    public static function getDataById(mysqli $connect, array $columns = [], $value): array;
}
