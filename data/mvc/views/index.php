<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        foreach($arrusers as $user){
            echo "<p>".$user[0]." ".$user[1]."<a href='?method=show&id=".$user[0]."'>Ver</a></p>";
        }
    ?>
</body>
</html>