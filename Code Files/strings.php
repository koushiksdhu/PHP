<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    $phrase = "This is a String.";
    echo $phrase;
    echo "<br>";

    $name = "KOuShiK";
    echo "Lowercase: ",strtolower($name),"<br>";
    echo "Upper Case: ",strtoupper($name),"<br>";
    echo "Length: ",strlen($name), "<br>";
    echo "2nd Character: ", $name[1], "<br>";
    echo "Mike"[0];
    echo "<br>";

    $fullName = "Koushik Sadhu";
    echo substr($name, 1, 4); 
    ?>
</body>
</html>