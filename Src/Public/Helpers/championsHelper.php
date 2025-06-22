<?php
require_once __DIR__ . '/../Models/championClass.php';

use UniverseLOL\Champion;

class ChampionsHelper extends EntityHelper
{
    protected static function getTableConfig(): string
    {
        return TableName::CHAMPION->value;
    }

    protected static function getClassName(): string
    {
        return Champion::class;
    }

    protected static function getConfigCases(): array
    {
        return ChampionConfig::cases();
    }

    protected static function getIdConfig(): string
    {
        return ChampionConfig::ID->value;
    }

    public static function getDataByRegionId(mysqli $connect, $value, array $columns = []): ?array
    {
        $query = Helper::stringQuery(self::getTableConfig(), $columns);
        $queryFind = Helper::stringQueryFind($query, ChampionConfig::REGION->value);
        return Helper::getEntities($connect, self::getClassName(), self::getConfigCases(), $queryFind, $value);
    }
}
