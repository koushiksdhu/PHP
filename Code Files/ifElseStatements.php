<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifElse Statements</title>
</head>
<body>
    
    <?php
        // Fizz Buzz Number: if N is divisible by 3 then print "Fizz",
        // else if N is divisible by 5 then print "Buzz",
        // else if N is divisible by both 3 and 5 then print "FizzBuzz".

        function fizzbuzz(int $num){
            if($num % 3 == 0 && $num % 5 == 0)
                echo "FizzBuzz<br>";
            else if($num % 5 == 0)
                echo "Buzz<br>";
            else if(num % 3 == 0)
                echo "Fizz<br>";
        }

        fizzbuzz(60);

        // OUTPUT: FizzBuzz


        // COMPARISONS IN IF-STATEMENTS:

        // Maximum of two numbers:

        function maximum($n1, $n2){
            if($n1 > $n2)
                return "$n1 is greater than $n2<br>";
            return "$n1 is smaller than $n2<br>";
        }

        echo maximum(55, 7);

        // OUTPUT: 55 is bigger than 7.


        // Maximum of three numbers:

        function max3($n1, $n2, $n3){
            if($n1 >= $n2 && $n1 >= $n3)
                return "$n1 is greater.<br>";
            else if($n2 >= $n1 && $n2 >= $n3)
                return "$n2 is greater.<br>";
            else
                return "$n3 is greater.<br>";
        }

        echo max3(1, 2, 2);

        // OUTPUT: 2 is greater.
    ?>
</body>
</html>