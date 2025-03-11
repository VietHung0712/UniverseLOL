<?php
require_once "../App/Config/database.php";
require_once "../App/Helpers/championsHelper.php";
require_once "../App/Helpers/regionsHelper.php";
require_once "../App/Helpers/rolesHelper.php";
require_once "../App/Helpers/relationsHelper.php";
require_once "../App/Helpers/skinsHelper.php";

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
mysqli_close($connect);