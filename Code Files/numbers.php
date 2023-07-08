<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php
        echo 40;
        echo "<br>";
        echo "20 + 5 = ",20+5;
        echo "<br>";
        echo "20 - 5 = ",20-5;
        echo "<br>";
        echo "20 * 5 = ",20*5;
        echo "<br>";
        echo "20 / 5 = ",20/5;
        echo "<br>";
        echo "20 % 5 = ",20%5;
        echo "<br>";
        echo "20 + 5 * 4 = ",20+5*4;
        echo "<br>";
        echo "(20 + 5) * 4 = ",(20+5)*4;
        echo "<br>";
        echo "2 ^ 4 = ",pow(2, 4);
        echo "<br>";
        echo "root(16) = ",sqrt(16);

        $num = 10;
        echo "<br>";
        echo "num = ",$num;

        $num++;
        echo "<br>";
        echo "num++ = ",$num;

        $num--;
        echo "<br>";
        echo "num-- = ",$num;

        ++$num;
        echo "<br>";
        echo "++num = ",$num;

        --$num;
        echo "<br>";
        echo "--num = ",$num;

        $num += 20;
        echo "<br>";
        echo "num += 20 = ",$num;

        $num -= 20;
        echo "<br>";
        echo "num -= 20= ",$num;

    ?>
</body>
</html>