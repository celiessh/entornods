<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <?php echo "
    <table>
        <tr>
            <td>
                ".$user[0]."
            </td>
            <td>
                ".$user[1]."
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                ".$user2[0]."
            </td>
            <td>
                ".$user2[1]."
            </td>
        </tr>
    </table>
    ";?>

<table>
        <tr>
            <td>
                <?php echo $user2[0]; ?>
            </td>
            <td>
                <?=$user2[1]?>
            </td>
        </tr>
    </table>
    <p><a href="?method=index">Volver</a></p>
</body>
</html>