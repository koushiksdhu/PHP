<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    
    <form action="switchStatements.php" method="post">
        Enter Your Percentage: <input type="number" step="0.01" name="perc">
        <br>
        <input type="submit">
    </form>


    <?php
        $p = $_POST["perc"];

        switch($p){
            case $p > 90:
                echo "Grade: O<br>";
                break;
            case $p > 80:
                echo "Grade: E<br>";
                break;
            case $p > 70:
                echo "Grade: A<br>";
                break;
            case $p > 60:
                echo "Grade: B<br>";
                break;
            case $p > 50:
                echo "Grade: C<br>";
                break;
            case $p > 40:
                echo "Grade: D<br>";
                break;
            default:
                echo "Grade: E<br>";
                break;
        }
    ?>
</body>
</html>