<?php
require_once "../../Core/Config/database.php";
require_once "../../Core/Helpers/championsHelper.php";
require_once "../../Core/Helpers/regionsHelper.php";
require_once "../../Core/Helpers/rolesHelper.php";
require_once "../../Core/Helpers/relationsHelper.php";
require_once "../../Core/Helpers/skinsHelper.php";

$database = new Database();
$connect = $database->connect();
$championId = $_GET['champion'];
getChampionById($connect, $championId,  $this_champion);
getRegion($connect, $this_champion->getRegion(), $this_region);
getRole($connect, $this_champion->getRole(), $this_role);
getRelations($connect, $this_champion->getId(), $allRelations);
getSkins($connect, $this_champion->getId(), $skins);

if (isset($allRelations)) {
    foreach ($allRelations as $item) {
        getChampionById($connect, $item->getRelatedId(), $object);
        $relations[] = $object;
    }
}
$connect->close();