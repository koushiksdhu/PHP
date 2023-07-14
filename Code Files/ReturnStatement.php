<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statement in Function</title>
</head>
<body>
    <?php

        // Write a function to cube a number by passing the number during function call.

        function cube($num){                    // Function Prototype/Header/Signature
            return $num*$num*$num;              // Return Statement
        }

        echo "Cube: ",cube(2),"<br>";           // Function Call and Printing.

        // OUTPUT: Cube: 8
    ?>
</body>
</html>