<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/rolesHelper.php";
    require_once "../../Assets/assets.php";

    $database = new Database();
    $connect = $database->connect();

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
        <table>
            <caption>Roles</caption>
            <thead>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>name</th>
                    <th>icon</th>
                    <th>display icon</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($roles)) {
                    foreach ($roles as $index => $role) {
                ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $role->getId(); ?></td>
                            <td><?php echo $role->getName(); ?></td>
                            <td><?php echo $role->getIcon(); ?></td>
                            <td>
                                <img src="<?php echo $assetsURL . "/" . $role->getIcon(); ?>" alt="">
                            </td>
                            <td>
                                <a href="./edit-role.php?id=<?php echo $role->getId(); ?>">Edit</a>
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