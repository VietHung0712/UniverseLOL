<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/championsHelper.php";

    $database = new Database();
    $connect = $database->connect();

    $championId = $_GET['champion_id'];
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
    <title>Manager - League of Legends</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <form action="../Controllers/add-relationController.php" method="POST">
            <table>
                <caption>Add new relation: <?php echo $championId; ?></caption>
                <tr>
                    <th>champion_id</th>
                    <td>
                        <input type="text" name="champion_id" value="<?php echo $championId; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>related_id</th>
                    <td>
                        <select name="related_id">
                            <?php
                            if (isset($champions)) {
                                foreach ($champions as $index => $champion) {
                                    if ($championId !== $champion->getId()) {
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
                        <input type="text" name="relation_type">
                    </td>
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
                    <td>
                        <a href="./relations.php?champion_id=<?php echo $championId; ?>">Cancel</a>
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>