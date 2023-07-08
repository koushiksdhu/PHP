<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Inputs</title>
</head>
<body>

    <form action="userInputs.php" method="get">
        <label>Name: </label>
        <input type="text" name="username">
        <input type="submit">
    </form>
    <br>
    <?php
        echo $_GET["username"]," form is submitted successfully.";
    ?>
</body>
</html>