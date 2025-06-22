<?php
abstract class EntityHelper
{
    public static function getData(mysqli $connect, array $columns = []): array
    {
        $query = Helper::stringQuery(static::getTableConfig(), $columns);
        return Helper::getEntities($connect, static::getClassName(), static::getConfigCases(), $query);
    }

    public static function getDataById(mysqli $connect, $value, array $columns = []): ?object
    {
        $query = Helper::stringQuery(static::getTableConfig(), $columns);
        $queryFind = Helper::stringQueryFind($query, static::getIdConfig());
        return Helper::getEntities($connect, static::getClassName(), static::getConfigCases(), $queryFind, $value)[0];
    }

    abstract protected static function getTableConfig(): string;
    abstract protected static function getClassName(): string;
    abstract protected static function getConfigCases(): array;
    abstract protected static function getIdConfig(): string;
}
