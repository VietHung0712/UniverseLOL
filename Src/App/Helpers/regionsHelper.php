<?php
require_once "../Models/regionClass.php";
require_once "../Config/entitiesConfig.php";
require_once "../Helpers/helper.php";

use UniverseLOL\Region;

class RegionsHelper
{
    public static function getRegions(mysqli $connect, array $columns): array
    {
        return Helper::getEntities($connect, Region::class, RegionConfig::cases(), $columns, TableName::REGION->value);
    }

    public static function getRegionById(mysqli $connect,array $columns, string $value): ?Region
    {
        return Helper::getEntitiesFindByField($connect, Region::class, RegionConfig::cases(), $columns, TableName::REGION->value, RegionConfig::ID->value, $value)[0];
    }

    public static function getNameAllRegions(mysqli $connect): array
    {
        $cols = [
            RegionConfig::ID->value,
            RegionConfig::NAME->value
        ];
        $result = [];
        $arr = Helper::getEntities($connect, Region::class, RegionConfig::cases(), $cols, TableName::REGION->value);
        foreach ($arr as $item) {
            $result[$item->getId()] = $item->getName();
        }
        return $result;
    }
}
