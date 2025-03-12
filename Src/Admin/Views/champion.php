<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/championController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <table>
            <tr>
                <th>id</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getId(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>name</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getName(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>region</th>
                <td>
                    <select class="inputValue" name="" disabled>
                        <?php
                        if (isset($regions)) {
                            foreach ($regions as $index => $region) {
                                if ($this_champion->getRegion() === $region->getId()) {
                        ?>
                                    <option value="<?php echo $region->getId() ?>" selected><?php echo $region->getName() ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $region->getId() ?>"><?php echo $region->getName() ?></option>
                                <?php
                                }
                                ?>

                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>role</th>
                <td><select class="inputValue" name="" disabled>
                        <?php
                        if (isset($roles)) {
                            foreach ($roles as $index => $role) {
                                if ($this_champion->getRole() === $role->getId()) {
                        ?>
                                    <option value="<?php echo $role->getId() ?>" selected><?php echo $role->getName() ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $role->getId() ?>"><?php echo $role->getName() ?></option>
                                <?php
                                }
                                ?>

                        <?php
                            }
                        }
                        ?>
                    </select></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>title</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getTitle(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>voice</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getVoice(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>story</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getStory(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>splash_art</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getSplashArt(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>aniamted_splash_art</th>
                <td><input class="inputValue" type="text" value="<?php echo $this_champion->getAnimatedSplashArt(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>position_x</th>
                <td><input class="inputValue" type="number" min="0" max="100" value="<?php echo $this_champion->getPositionX(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <th>position_y</th>
                <td><input class="inputValue" type="number" min="0" max="100" value="<?php echo $this_champion->getPositionY(); ?>" disabled></td>
                <td><button>Edit</button></td>
            </tr>
        </table>
    </main>
</body>

</html>
<script src="../../../Assets/Javascript/function.js"></script>
<script>
    const btnEdit = $$('td>button');
    const inputValue = $$('.inputValue');

    btnEdit.forEach((element, index) => {
        element.addEventListener('click', () => {
            inputValue.forEach(element => {
                element.disabled = true;
            });
            inputValue[index].disabled = false;
        })
    });
</script>