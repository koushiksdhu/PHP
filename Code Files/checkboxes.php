<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>

    <form action="checkboxes.php" method="post">
        Apples <input type="checkbox" name="fruit[]" value="Apples"><br>
        Strawberry <input type="checkbox" name="fruit[]" value="Strawberry"><br>
        Pineapple <input type="checkbox" name="fruit[]" value="Pineapple"><br>
        Oranges <input type="checkbox" name="fruit[]" value="Oranges"><br>
        Mango <input type="checkbox" name="fruit[]" value="Mango"><br>
        <br>
        <input type="submit">
    </form>

    <?php
        $arr = $_POST["fruit"];
        foreach($arr as $i){
            echo "$i<br>";
        }
    ?>
</body>
</html>