<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Core/Config/database.php";
    require_once "../../Core/Helpers/skinsHelper.php";
    require_once "../../Assets/assets.php";

    $database = new Database();
    $connect = $database->connect();

    $id = $_GET['id'];
    getSkinById($connect, $id, $skin);
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
        <form action="../Controllers/delete-skinController.php" method="POST">
            <table>
                <caption>Delete skin: <?php echo $skin->getChampion(); ?></caption>
                <tr>
                    <th>id</th>
                    <td>
                        <input type="text" name="id" value="<?php echo $skin->getId(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>champion</th>
                    <td>
                        <input type="text" name="champion" value="<?php echo $skin->getChampion(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>name</th>
                    <td>
                        <input type="text" name="name" value="<?php echo $skin->getName(); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>splash_art</th>
                    <td>
                        <input class="inputSA" type="text" name="splash_art" value="<?php echo $skin->getSplashArt(); ?>" readonly>
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
                        <input type="button" value="Delete">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <a href="./skins.php?champion=<?php echo $skin->getChampion(); ?>">Cancel</a>
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
    const btnSubmit = document.querySelector('input[type=button]');
    const form = document.querySelector('form');

    btnSubmit.addEventListener('click', () => {
        if (confirm("Confirm delete?")) {
            form.submit();
        }
    })

    function getSrc(){
        let url = inputSrc.value;
        img.src = assetsURL + '/' + url;
    }

    getSrc();
</script>