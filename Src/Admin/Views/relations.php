<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/relationsHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $championId = $_GET['champion_id'];
    getRelations($connect, $championId, $relations);
    $connect->close();
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Relations - <?php echo $championId; ?> - Manager</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <table>
            <caption><?php echo $championId; ?></caption>
            <thead>
                <tr>
                    <th><a href="./add-relation.php?champion_id=<?php echo $championId; ?>">Add</a></th>
                </tr>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>related_id</th>
                    <th>relation_type</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($relations)) {
                    foreach ($relations as $index => $relation) {
                ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $relation->getId(); ?></td>
                            <td><?php echo $relation->getRelatedId(); ?></td>
                            <td><?php echo $relation->getRelationType(); ?></td>
                            <td>
                                <a href="./edit-relation.php?id=<?php echo $relation->getId(); ?>">Edit</a>
                                <a href="./delete-relation.php?id=<?php echo $relation->getId(); ?>">Delete</a>
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