<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/regionsHelper.php";
    require_once "../../Core/Helpers/rolesHelper.php";

    $database = new Database();
    $connect = $database->connect();

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
        <form action="../Controllers/add-championController.php" method="POST">
            <table>
                <Caption>Add new champion</Caption>
                <tr>
                    <th>id</th>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>region</th>
                    <td>
                        <select name="region">
                            <?php
                            if (isset($regions)) {
                                foreach ($regions as $region) {
                            ?>
                                    <option value="<?php echo $region->getId() ?>">
                                        <?php echo $region->getName() ?>
                                    </option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>role</th>
                    <td>
                        <select name="role">
                            <?php
                            if (isset($roles)) {
                                foreach ($roles as $role) {
                            ?>
                                    <option value="<?php echo $role->getId() ?>">
                                        <?php echo $role->getName() ?>
                                    </option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>title</th>
                    <td><input type="text" name="title" required></td>
                </tr>
                <tr>
                    <th>voice</th>
                    <td><input type="text" name="voice" required></td>
                </tr>
                <tr>
                    <th>story</th>
                    <td><input type="text" name="story" required></td>
                </tr>
                <tr>
                    <th>splash_art</th>
                    <td><input type="text" name="splash_art"></td>
                </tr>
                <tr>
                    <th>animated_splash_art</th>
                    <td><input type="text" name="animated_splash_art"></td>
                </tr>
                <tr>
                    <th>position_x</th>
                    <td><input type="number" name="position_x" min="0" max="100" value="0"></td>
                </tr>
                <tr>
                    <th>position_y</th>
                    <td><input type="number" name="position_y" min="0" max="100" value="0"></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Add">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="reset" value="Reset"></td>
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