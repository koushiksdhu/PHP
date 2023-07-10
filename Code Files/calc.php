<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
        <form action="calc.php" method="get">
            First Number: <input type="number" name="n1">
            <br>
            Second Number: <input type="number" name="n2">
            <br>
            <input type="submit">
        </form>
        
        Answers: <?php echo $_GET["n1"] + $_GET["n2"]; ?>  
</body>
</html>