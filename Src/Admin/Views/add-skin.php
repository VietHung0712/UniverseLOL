<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Assets/assets.php";

    $database = new Database();
    $connect = $database->connect();

    $champion = $_GET['champion'];
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
        <form action="../Controllers/add-skinController.php" method="POST">
            <table>
                <caption>Add new skin: <?php echo $champion; ?></caption>
                <tr>
                    <th>champion</th>
                    <td>
                        <input type="text" name="champion" value="<?php echo $champion; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>name</th>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
                <tr>
                    <th>splash_art</th>
                    <td>
                        <input class="inputSA" type="text" name="splash_art" required>
                    </td>
                </tr>
                <tr>
                    <th>display splash_art</th>
                    <td>
                        <img src="" alt="">
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
                        <a href="./skins.php?champion=<?php echo $champion; ?>">Cancel</a>
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>
<script>
    const inputSrc = document.querySelector('.inputSA');
    const img = document.querySelector('td>img');
    const assetsURL = "<?php echo $assetsURL; ?>";

    inputSrc.addEventListener("input", () => {
        let url = inputSrc.value;
        img.src = assetsURL + '/' + url;
    });
</script>