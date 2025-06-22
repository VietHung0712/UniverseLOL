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
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/layout-admin.css">
    <title>Champions - Admin</title>
</head>

<body>
    <main id="columns">
        <form action="#" method="POST">
            <input type="search" placeholder="Search">
            <select name="" id="">
                <option value="az">A->Z</option>
                <option value="newest">Newest</option>
                <option value="region">Region</option>
            </select>
            <input type="submit" value="Search">
        </form>
        <table>
            <caption>Champions</caption>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Region</th>
                <th>Release Date</th>
                <th>Updated Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                if (isset($champions)) {
                    foreach ($champions as $i => $item) {
                ?>
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $item->getId(); ?>" disabled>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $item->getName(); ?>" disabled>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $item->getRegion(); ?>" disabled>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $item->getReleaseDate(); ?>" disabled>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $item->getUpdatedDate(); ?>" disabled>
                            </td>
                            <td>
                                <a href="">Details</a>
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