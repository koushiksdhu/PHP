<!-- Fetching KEY from FORM and searching its value from Associative Array -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Implementation Using Form</title>
</head>
<body>
    
    <form action="FetchingKeyFromForm.php" method="post">
        <input type="text" name="student">
        <br>
        <input type="submit">
    </form> 

    <?php
        $grades = array("Koushik" => 9.51, "Anmol" => 8.2, "Shuvam" => 8.77, "Pranay" => 8.23);
        echo "Name: ",$_POST["student"],"<br>";
        echo "Grade: ",$grades[$_POST["student"]];
    ?>
    
</body>
</html>