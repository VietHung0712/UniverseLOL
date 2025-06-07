<?php
require_once "../Config/config.php";
require_once "../Helpers/championsHelper.php";
require_once "../Helpers/regionsHelper.php";
require_once "../Helpers/rolesHelper.php";
require_once "../Helpers/relationsHelper.php";
require_once "../Helpers/skinsHelper.php";

$config = new Config();
$connect = $config->connect();
$championId = $_GET['champion'];
$this_champion = ChampionsHelper::getChampionById($connect, $championId);
$relationsArr = RelationsHelper::getRelations($connect, $championId);
$role = RolesHelper::getRoleById($connect, $this_champion->getRole());
$region = RegionsHelper::getRegionById($connect, $this_champion->getRegion());
$skinsArr = SkinsHelper::getSkinsByChampionId($connect, $championId);

$championRelationsArr = [];
if (isset($relationsArr) && !empty($relationsArr)) {
    foreach ($relationsArr as $item) {
        $championRelationsArr[] = ChampionsHelper::getChampionById($connect, $item->getRelatedId());
    }
}

$connect->close();
