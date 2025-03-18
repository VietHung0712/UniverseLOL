<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Config/database.php";
    require_once "../Helpers/relationsHelper.php";
    require_once "../Helpers/championsHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $relationId = $_GET['id'];
    getRelationById($connect, $relationId, $relation);
    getAllChampions($connect, $champions);
    $connect->close();
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Relations - Edit - <?php echo $relation->getChampionId(); ?> - Manager</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <form action="../Controllers/delete-relationController.php" method="POST">
            <table>
                <caption><?php echo $relation->getChampionId(); ?></caption>
                <tr>
                    <th>id</th>
                    <td>
                        <input type="text" name="id" value="<?php echo $relation->getId(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>champion_id</th>
                    <td>
                        <input type="text" name="champion_id" value="<?php echo $relation->getChampionId(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>related_id</th>
                    <td>
                    <input type="text" name="related_id" value="<?php echo $relation->getRelatedId(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>relation_type</th>
                    <td>
                        <input type="text" name="relation_type" value="<?php echo $relation->getRelationType(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="button" value="Delete">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <a href="./relations.php?champion_id=<?php echo $relation->getChampionId(); ?>">Cancel</a>
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