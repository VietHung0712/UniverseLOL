<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/championsHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $championId = $_GET['champion'];
    getChampionById($connect, $championId, $this_champion);
    $connect->close();
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Delete- Manager</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <form action="../Controllers/delete-championController.php" method="POST">
            <table>
                <Caption>Delete <?php echo $this_champion->getId(); ?> </Caption>
                <tr>
                    <th>id</th>
                    <td><input type="text" name="id" value="<?php echo $this_champion->getId(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><input type="text" name="name" value="<?php echo $this_champion->getName(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>region</th>
                    <td><input type="text" name="region" value="<?php echo $this_champion->getRegion(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>role</th>
                    <td><input type="text" name="role" value="<?php echo $this_champion->getRole(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>title</th>
                    <td><input type="text" name="title" value="<?php echo $this_champion->getTitle(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>voice</th>
                    <td><input type="text" name="voice" value="<?php echo $this_champion->getVoice(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>story</th>
                    <td><input type="text" name="story" value="<?php echo $this_champion->getStory(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>splash_art</th>
                    <td><input type="text" name="splash_art" value="<?php echo $this_champion->getSplashArt(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>animated_splash_art</th>
                    <td><input type="text" name="animated_splash_art" value="<?php echo $this_champion->getAnimatedSplashArt(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>position_x</th>
                    <td><input type="number" name="position_x" min="0" max="100" value="<?php echo $this_champion->getPositionX(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>position_y</th>
                    <td><input type="number" name="position_y" min="0" max="100" value="<?php echo $this_champion->getPositionY(); ?>" readonly></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="button" value="Delete" style="background-color: #f00;">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td><a href="./champions.php">Cancel</a></td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>
<script>
    const btnSubmit = document.querySelector('input[type=button]');
    const form = document.querySelector('form');

    btnSubmit.addEventListener('click', () => {
        if (confirm("Confirm delete?")) {
            form.submit();
        }
    })
</script>