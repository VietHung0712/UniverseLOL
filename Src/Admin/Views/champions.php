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
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Manager - League of Legends</title>
</head>

<body>
    <?php require_once "./Templates/header.html"; ?>
    <main>
        <table>
            <caption>Champions</caption>
            <thead>
                <tr>
                    <th><a href="./add-champion.php">Add</a></th>
                    <th><input type="search"></th>
                </tr>
                <tr>

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
                        <tr class="rowData" data-id="<?php echo $champion->getId(); ?>">
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $champion->getId(); ?></td>
                            <td><?php echo $champion->getName(); ?></td>
                            <td>
                                <a href="./details-champion.php?champion=<?php echo $champion->getId(); ?>">Details</a>
                                <a href="./relations.php?champion_id=<?php echo $champion->getId(); ?>">Relations</a>
                                <a href="./skins.php?champion=<?php echo $champion->getId(); ?>">Skins</a>
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
<script src="../../../Assets/Javascript/function.js"></script>
<script>
    const inputSearch = $('input[type="search"]');
    const rowsData = $$('.rowData');

    inputSearch.addEventListener('input', () => {
        const searchValue = inputSearch.value.trim().toLowerCase();
        filterSearch(searchValue, rowsData, 'table-row');
    });
</script>