<?php
require_once __DIR__ . '/../Models/skinClass.php';

use UniverseLOL\Skin;

class SkinsHelper extends EntityHelper
{
    protected static function getTableConfig(): string
    {
        return TableName::SKIN->value;
    }

    protected static function getClassName(): string
    {
        return Skin::class;
    }

    protected static function getConfigCases(): array
    {
        return SkinConfig::cases();
    }

    protected static function getIdConfig(): string
    {
        return SkinConfig::ID->value;
    }

    public static function getDataByChampionId(mysqli $connect, $value, array $columns = []): ?array
    {
        $query = Helper::stringQuery(self::getTableConfig(), $columns);
        $queryFind = Helper::stringQueryFind($query, SkinConfig::CHAMPIONID->value);
        return Helper::getEntities($connect, self::getClassName(), self::getConfigCases(), $queryFind, $value);
    }
}
