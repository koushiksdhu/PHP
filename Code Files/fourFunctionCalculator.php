<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="fourFunctionCalculator.php" method="post">
        First Number: <input type="number" step="0.1" name="n1">
        <br>
        Operator: <input type="text" name="op">
        <br>
        Second Number: <input type="number" step="0.1" name="n2">
        <br>
        <input type="submit">
        <br>
    </form>

    <?php

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $op = $_POST["op"];

        if($op == "+")
            echo "Sum: ", $n1+$n2,"<br>";
        else if($op == "-")
            echo "Difference: ", $n1-$n2,"<br>";
        else if($op == "*")
            echo "Product: ", $n1*$n2,"<br>";
        else if($op == "/")
            echo "Division: ", $n1/$n2,"<br>";
        else
            echo "Invalid Operator! Please try again."

    ?>



</body>
</html>