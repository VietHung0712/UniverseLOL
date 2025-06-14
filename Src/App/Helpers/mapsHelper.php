<?php
require_once "../Models/mapClass.php";
require_once "../Config/entitiesConfig.php";
require_once "../Helpers/helper.php";

use UniverseLOL\Map;

class MapsHelper
{
    public static function getMaps(mysqli $connect, array $columns): array
    {
        return Helper::getEntities($connect, Map::class, MapConfig::cases(), $columns, TableName::MAP->value);
    }

    // public static function getMapsByRegionId(mysqli $connect, string $value): array
    // {
    //     return Helper::getEntitiesFindByField($connect, Map::class, MapConfig::cases(), [], TableName::MAP->value, MapConfig::REGIONID->value, $value);
    // }

    public static function getMapsForRegion(mysqli $connect): array
    {
        $arr = self::getMaps($connect, []);
        $result = [];
        foreach ($arr as $item) {
            $regionId = $item->getRegionId();
            $points = trim($item->getPoints());
            if (!isset($result[$regionId])) {
                $result[$regionId] = [];
            }
            $result[$regionId][] = $points;
        }
        return $result;
    }
}
