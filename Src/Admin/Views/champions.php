<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/championsController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin-champion.css">
    <title>Champions - Manager</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <table>
            <thead>
                <tr>
                    <th><a href="./add-champion.php">Add</a></th>
                </tr>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($champions)) {
                    foreach ($champions as $index => $champion) {
                ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $champion->getId(); ?></td>
                            <td><?php echo $champion->getName(); ?></td>
                            <td>
                                <a href="./details-champion.php?champion=<?php echo $champion->getId(); ?>">Details</a>
                                <a href="./edit-champion.php?champion=<?php echo $champion->getId(); ?>">Edit</a>
                                <a href="./delete-champion.php?champion=<?php echo $champion->getId(); ?>">Delete</a>
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