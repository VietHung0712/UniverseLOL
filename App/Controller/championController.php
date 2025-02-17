<?php
require_once "./App/Database/connect.php";
require_once "./App/Helper/championsHelper.php";
require_once "./App/Helper/regionsHelper.php";
require_once "./App/Helper/rolesHelper.php";
require_once "./App/Helper/relationsHelper.php";
require_once "./App/Helper/skinsHelper.php";

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
