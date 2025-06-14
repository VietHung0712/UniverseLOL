<?php
require_once "../Models/relationClass.php";

use UniverseLOL\Relation;

class RelationsHelper
{
    public static function getRelations(mysqli $connect, array $columns): array
    {
        return Helper::getEntities($connect, Relation::class, RelationConfig::cases(), $columns, TableName::RELATION->value);
    }

    public static function getRelationsByChampionId(mysqli $connect, array $columns, string $value): array
    {
        return Helper::getEntitiesFindByField($connect, Relation::class, RelationConfig::cases(), $columns, TableName::RELATION->value, RelationConfig::CHAMPIONID->value, $value);
    }
}
