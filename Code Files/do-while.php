<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do-while loop</title>
</head>
<body>
    <?php
        $i = 1;
        do{
            echo "This is a do-while loop.<br>";
            $i++;
        }while($i < 5);

        // OUTPUT:
        /*
        This is a do-while loop.
        This is a do-while loop.
        This is a do-while loop.
        This is a do-while loop.
        */
    ?>
</body>
</html>