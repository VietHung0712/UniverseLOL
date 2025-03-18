<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Config/database.php";
    require_once "../Helpers/regionsHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $regionId = $_GET['region'];
    getRegion($connect, $regionId, $this_region);
    $connect->close();
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Details - <?php echo $this_region->getName(); ?> - Manager</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <form action="../Controllers/delete-regionController.php" method="POST">
            <table>
                <tr>
                    <th>id</th>
                    <td><input type="text" name="id" value="<?php echo $this_region->getId(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><input type="text" name="name" value="<?php echo $this_region->getName(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>story</th>
                    <td><input type="text" name="story" value="<?php echo $this_region->getStory(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>icon</th>
                    <td><input type="text" name="icon" value="<?php echo $this_region->getIcon(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>avatar</th>
                    <td><input type="text" name="title" value="<?php echo $this_region->getAvatar(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>background</th>
                    <td><input type="text" name="background" value="<?php echo $this_region->getBackground(); ?>" readonly></td>
                </tr>
                <tr>
                    <th>animated_background</th>
                    <td><input type="text" name="animated_background" value="<?php echo $this_region->getAnimatedBackground(); ?>" readonly></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="button" value="Delete" style="background-color: #f00;">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <a href="./regions.php">Cancel</a>
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
        if (confirm("Confirm delete?")) {
            form.submit();
        }
    })
</script>