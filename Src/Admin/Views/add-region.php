<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../../Assets/Css/layout-admin.css">
    <title>Add Region - Manager</title>
</head>

<body>
    <main>
        <form action="../Controllers/add-regionController.php" method="POST">
            <table>
                <tr>
                    <th>id</th>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                    <th>story</th>
                    <td><input type="text" name="story" required></td>
                </tr>
                <tr>
                    <th>icon</th>
                    <td><input type="text" name="icon"></td>
                </tr>
                <tr>
                    <th>avatar</th>
                    <td><input type="text" name="avatar"></td>
                </tr>
                <tr>
                    <th>background</th>
                    <td><input type="text" name="background"></td>
                </tr>
                <tr>
                    <th>animated_background</th>
                    <td><input type="text" name="animated_background"></td>
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
                    <td><a href="./regions.php">Cancel</a></td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>