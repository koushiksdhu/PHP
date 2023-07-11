<!-- Arrays -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $arr = array("Koushik", "Shuvam", 75, "Pranay", "Anmol", 10.10, "Adarsh", false);
        echo "$arr";          // -> It will just print Array
        echo "<br>$arr[0]";
        echo "<br>$arr[2]";
        echo "<br>$arr[5]";         // In place of false nothing will be printed
        echo "<br>",$arr[count($arr)-1];

        $arr[2] = true;
        echo "<br>",$arr[2];

        $arr[count($arr)] = "Sadhu";        // Array works dynamically in PHP ie., we can add any element in that array anytime and it will get added to it.
        echo "<br>",$arr[count($arr)-1];

        // Total length of the array:
        $len = count($arr);
        echo "<br>Length: $len";

        // Iterating and fetching each element in an array using "foreach" loop:
        echo "<br>";
        foreach($arr as $i){
            echo $i," ";
        }
        echo "<br>";


    ?>

</body>
</html>
