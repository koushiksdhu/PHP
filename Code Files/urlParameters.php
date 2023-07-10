<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameter</title>
</head>
<body>
    <form action="urlParameters.php" method="POST"> 
        <label>Name: </label>
        <input type="text" name="name">
        <br>
        <br>
        <label>Password: </label>
        <input type="password" name="password">
        <br><br>
        <input type="submit">    
    </form>

    <?php
        echo "<br><br>Name: {$_POST["name"]}<br>";
        echo "<br><br>Password: {$_POST["password"]}<br>";
    ?>
</body>
</html>