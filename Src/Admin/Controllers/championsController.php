<?php
require_once "../../Public/Config/config.php";
require_once "../../Public/Helpers/helper.php";
require_once "../../Public/Config/entitiesConfig.php";
require_once "../../Public/Helpers/championsHelper.php";
require_once "../../Public/Helpers/regionsHelper.php";

$cols = [
    ChampionConfig::ID->value,
    ChampionConfig::NAME->value,
    ChampionConfig::REGION->value,
    ChampionConfig::RELEASEDATE->value,
    ChampionConfig::UPDATEDDATE->value
];
$config = new Config();
$connect = $config->connect();
$champions = ChampionsHelper::getChampions($connect, $cols);
$getNameRegionById = RegionsHelper::getNameAllRegions($connect);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $name = $_POST['category'];

    // $sql = "INSERT INTO categories VALUES ('', ?)";
    $result = mysqli_prepare($connect, $sql);
    if ($result) {
        $result->bind_param("s", $name);
        if ($result->execute()) {
            header("Location: ./admin_add_category.php");
            exit();
        } else {
            echo "<script>alert('Đã có lỗi!')</script>";
        }
        $result->close();
    } else {
        echo "<script>alert('Không thể chuẩn bị truy vấn!')</script>";
    }
}
$connect->close();
