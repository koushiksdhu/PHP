<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

    <?php
        function sayHi($name) {        // Function Prototype/Header/Signature .
            echo "Hello, $name<br>";      // Defination/Body of a Function.
        }

        sayHi("Sadhu");                        // Calling Function

        // OUTPUT: Hello, Sadhu

        function details($name, $age){
            echo "Hello, $name. You're age is $age<br>";
        }

        details("Koushik", 21);

        // OUTPUT: Hello, Koushik. You're age is 21.

        // Addition of two numbers:

        function add($a, $b){
            echo"Sum: ", ($a+$b),"<br>";
        }

        add(8, 8);

        // OUTPUT: Sum: 16
    ?>

</body>
</html>