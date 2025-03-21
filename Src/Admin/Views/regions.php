<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/regionsController.php";
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
            <caption>Regions</caption>
            <thead>
                <tr>
                    <th><a href="./add-region.php">Add</a></th>
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
                if (isset($regions)) {
                    foreach ($regions as $index => $region) {
                ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $region->getId(); ?></td>
                            <td><?php echo $region->getName(); ?></td>
                            <td>
                                <a href="./details-region.php?region=<?php echo $region->getId(); ?>">Details</a>
                                <a href="./edit-region.php?region=<?php echo $region->getId(); ?>">Edit</a>
                                <a href="./delete-region.php?region=<?php echo $region->getId(); ?>">Delete</a>
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