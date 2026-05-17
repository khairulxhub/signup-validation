<!DOCTYPE html>
<html>
<head>
    <title>Grade Checker</title>
</head>
<body>

<form method="post">
    Enter Grade:
    <input type="text" name="grade">
    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $grade = $_POST['grade'];

    // Using else if structure
    if ($grade == "A") {
        echo "<h3>Excellent</h3>";
    }
    else if ($grade == "B") {
        echo "<h3>Good</h3>";
    }
    else if ($grade == "C") {
        echo "<h3>Fair</h3>";
    }
    else if ($grade == "D") {
        echo "<h3>Poor</h3>";
    }
    else if ($grade == "F") {
        echo "<h3>Failure</h3>";
    }
    else {
        echo "<h3>Invalid Grade</h3>";
    }
}

?>

</body>
</html>