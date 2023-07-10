<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Inputs</title>
</head>
<body>

    <form action="userInputs.php" method="GET">
        <label>Name: </label>
        <input type="text" name="username">
        <br>
        <label>Age: </label>
        <input type="number" name="age">
        <br>
        <input type="submit">
    </form>
    <br>
    <?php echo $_GET["username"]," form is submitted successfully.<br>Age of ",$_GET["username"]," is: ",$_GET["age"],"."; ?>
</body>
</html>