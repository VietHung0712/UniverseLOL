<?php
require_once "../Models/championClass.php";
require_once "../Helpers/helper.php";
require_once "../Config/entitiesConfig.php";

use UniverseLOL\Champion;

class ChampionsHelper
{
    public static function getChampions(mysqli $connect, array $columns): array
    {
        return Helper::getEntities($connect, Champion::class, ChampionConfig::cases(), $columns, TableName::CHAMPION->value);
    }

    public static function getChampionById(mysqli $connect, array $columns, string $value): array
    {
        return Helper::getEntitiesFindByField($connect, Champion::class, ChampionConfig::cases(), $columns, TableName::CHAMPION->value, ChampionConfig::ID->value, $value);
    }

    public static function getChampionsByRegionId(mysqli $connect, array $columns, string $value): array
    {
        return Helper::getEntitiesFindByField($connect, Champion::class, ChampionConfig::cases(), $columns, TableName::CHAMPION->value, ChampionConfig::REGION->value, $value);
    }
}
