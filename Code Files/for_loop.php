<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-Loop</title>
</head>
<body>
    <?php

        for($i = 0; $i < 5; $i++){
            echo "Loop execution $i.<br>";
        }

        // OUTPUT:

        /*
        Loop execution 0.
        Loop execution 1.
        Loop execution 2.
        Loop execution 3.
        Loop execution 4.
        */

        // Accessing elements using For-Loop:
        
        $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i],"<br>";
        }

    ?>
</body>
</html>