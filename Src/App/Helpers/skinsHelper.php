<?php
require_once "../Models/skinClass.php";
require_once "../Config/entitiesConfig.php";

use UniverseLOL\Skin;

class SkinsHelper
{
    public static function getSkins(mysqli $connect, array $columns): array
    {
        return Helper::getEntities($connect, Skin::class, SkinConfig::cases(), $columns, TableName::SKIN->value);
    }

    public static function getSkinsByChampionId(mysqli $connect, array $columns, string $value): array
    {
        return Helper::getEntitiesFindByField($connect, Skin::class, SkinConfig::cases(), $columns, TableName::SKIN->value, SkinConfig::CHAMPIONID->value, $value);
    }
}
