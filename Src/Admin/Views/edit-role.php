<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/rolesHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $roleId = $_GET['id'];
    getRole($connect, $roleId, $role);
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
        <form action="../Controllers/edit-roleController.php" method="POST">
            <table>
                <caption>Edit role: <?php echo $role->getId(); ?></caption>
                <tr>
                    <th>id</th>
                    <td>
                        <input type="text" name="id" value="<?php echo $role->getId(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>name</th>
                    <td>
                        <input type="text" name="name" value="<?php echo $role->getName(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>icon</th>
                    <td>
                        <input type="text" name="icon" value="<?php echo $role->getIcon(); ?>" required>
                    </td>
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
                        <a href="./roles.php">Cancel</a>
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