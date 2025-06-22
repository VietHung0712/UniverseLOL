<?php
require_once "./Src/Public/Config/config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $config = new Config();
    $connect = $config->connect();
    $sql = "SELECT * FROM administrator WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    if ($result->num_rows > 0) {
        header("Location: ./Src/Admin/Views/champions.php");
        exit();
    } else {
?>
        <script>
            alert("Incorrect username or password!");
        </script>
<?php
    }
    $connect->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Src/Assets/Css/reset.css">
    <link rel="stylesheet" href="./Src/Assets/Css/layout-admin.css">
    <title>Admin - Universe of League of Legends</title>
</head>

<body>
    <main id="columns">
        <form action="#" method="POST">
            <table>
                <caption>Login</caption>
                <tr>
                    <th>User name</th>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Login">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>