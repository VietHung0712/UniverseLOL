<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/skinsHelper.php";
    require_once "../../Assets/assets.php";

    $database = new Database();
    $connect = $database->connect();

    $champion = $_GET['champion'];
    getSkins($connect, $champion, $skins);
    $connect->close();
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Manager - League of Legends</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <table>
            <caption>Skins: <?php echo $champion; ?></caption>
            <thead>
                <tr>
                    <th><a href="./add-skin.php?champion=<?php echo $champion; ?>">Add</a></th>
                </tr>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>name</th>
                    <th>splash_art</th>
                    <th>display splash_art</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($skins)) {
                    foreach ($skins as $index => $skin) {
                ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $skin->getId(); ?></td>
                            <td><?php echo $skin->getName(); ?></td>
                            <td><?php echo $skin->getSplashArt(); ?></td>
                            <td>
                                <img src="<?php echo $assetsURL . "/" . $skin->getSplashArt(); ?>" alt="">
                            </td>
                            <td>
                                <a href="./edit-skin.php?id=<?php echo $skin->getId(); ?>">Edit</a>
                                <a href="./delete-skin.php?id=<?php echo $skin->getId(); ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>