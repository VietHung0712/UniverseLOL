<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/championsHelper.php";
    require_once "../../Core/Helpers/regionsHelper.php";
    require_once "../../Core/Helpers/rolesHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $championId = $_GET['champion'];
    getChampionById($connect, $championId, $this_champion);
    getAllRegions($connect, $regions);
    getAllRoles($connect, $roles);
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
        <form action="../Controllers/edit-championController.php" method="POST">
            <table>
                <caption>Edit: <?php echo $this_champion->getName(); ?></caption>
                <tr>
                    <th>id</th>
                    <td><input type="text" name="id" value="<?php echo $this_champion->getId(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><input type="text" name="name" value="<?php echo $this_champion->getName(); ?>" required></td>
                </tr>
                <tr>
                    <th>region</th>
                    <td>
                        <select name="region">
                            <?php
                            if (isset($regions)) {
                                foreach ($regions as $index => $region) {
                                    if ($this_champion->getRegion() === $region->getId()) {
                            ?>
                                        <option value="<?php echo $region->getId() ?>" selected><?php echo $region->getName() ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $region->getId() ?>"><?php echo $region->getName() ?></option>
                                    <?php
                                    }
                                    ?>

                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>role</th>
                    <td><select name="role">
                            <?php
                            if (isset($roles)) {
                                foreach ($roles as $index => $role) {
                                    if ($this_champion->getRole() === $role->getId()) {
                            ?>
                                        <option value="<?php echo $role->getId() ?>" selected><?php echo $role->getName() ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $role->getId() ?>"><?php echo $role->getName() ?></option>
                                    <?php
                                    }
                                    ?>

                            <?php
                                }
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <th>title</th>
                    <td><input type="text" name="title" value="<?php echo $this_champion->getTitle(); ?>" required></td>
                </tr>
                <tr>
                    <th>voice</th>
                    <td><input type="text" name="voice" value="<?php echo $this_champion->getVoice(); ?>" required></td>
                </tr>
                <tr>
                    <th>story</th>
                    <td><input type="text" name="story" value="<?php echo $this_champion->getStory(); ?>" required></td>
                </tr>
                <tr>
                    <th>splash_art</th>
                    <td><input type="text" name="splash_art" value="<?php echo $this_champion->getSplashArt(); ?>" required></td>
                </tr>
                <tr>
                    <th>animated_splash_art</th>
                    <td><input type="text" name="animated_splash_art" value="<?php echo $this_champion->getAnimatedSplashArt(); ?>"></td>
                </tr>
                <tr>
                    <th>position_x</th>
                    <td><input type="number" name="position_x" min="0" max="100" value="<?php echo $this_champion->getPositionX(); ?>"></td>
                </tr>
                <tr>
                    <th>position_y</th>
                    <td><input type="number" name="position_y" min="0" max="100" value="<?php echo $this_champion->getPositionY(); ?>"></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="button" value="Edit">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="reset" value="Reset"></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <a href="./details-champion.php?champion=<?php echo $this_champion->getId(); ?>">Cancel</a>
                    </td>
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
        if (confirm("Confirm edit?")) {
            form.requestSubmit();
        }
    })
</script>