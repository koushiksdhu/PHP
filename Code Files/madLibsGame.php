<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game</title>
</head>
<body>
    <form action="madLibsGame.php" method="get">
        Color: <input type="text" name="color">
        <br>
        Plural: <input type="text" name="plural">
        <br>
        Celebrity: <input type="text" name="celebrity">
        <br>
        <input type="submit">

    </form>

    <?php
       
        echo "<br>Roses are {$_GET["color"]} <br>";
        echo "{$_GET["plural"]} are blue <br>";
        echo "I love {$_GET["celebrity"]} <br>";
    ?>
</body>
</html>