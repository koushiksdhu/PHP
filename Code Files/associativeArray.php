<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <!-- So inside a Associative array we are going to store STUDENTS NAME as well as the GRADE. -->
    <!-- In Associative Array, => (Equals to and greater sign) is used to store KEY-VALUE pairs. -->

    <?php
        // The KEY must be unique, No duplicate key should be present in the associative array.
        // The VALUE may or may not be unique but the KEY should always be unique. 
        // If the KEY is not unique and if that non-unique key is being fethched than the last key of that name, value will be fetched.
        $arr = array("Koushik" => 9.51, "Shuvam" => 8.77, "Pranay" => 8.23, "Anmol" => 8.5);
        echo $arr["Koushik"],"<br>";       // Will print 9.51
        echo $arr["Anmol"],"<br>";         // Will print 8.5

        // Modifying value:
        
        $arr["Anmol"] = 8.2;
        echo $arr["Anmol"],"<br>";         // Will print 8.2

        // Counting the total number of elements present inside the associative array:
        // This will tell us how many KEY-MAPPINGS we have.
        echo "Length: ",count($arr);    // Length: 4
    ?>
    
</body>
</html>