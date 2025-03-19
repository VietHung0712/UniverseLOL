<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/relationsHelper.php";
    require_once "../../Core/Helpers/championsHelper.php";

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
        <form action="../Controllers/edit-relationController.php" method="POST">
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
                        <select name="related_id">
                            <?php
                            if (isset($champions)) {
                                foreach ($champions as $index => $champion) {
                                    if ($relation->getRelatedId() === $champion->getId()) {
                            ?>
                                        <option value="<?php echo $champion->getId(); ?>" selected><?php echo $champion->getId(); ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $champion->getId(); ?>"><?php echo $champion->getId(); ?></option>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>relation_type</th>
                    <td>
                        <input type="text" name="relation_type" value="<?php echo $relation->getRelationType(); ?>">
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
        if (confirm("Confirm edit?")) {
            form.submit();
        }
    })
</script>