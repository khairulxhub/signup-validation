<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three largest number</title>
</head>

<body>
    <h2>THREE LARGEST NUMBER</h2>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter Number"> <br>
        <input type="number" name="num2" placeholder="Enter Number"> <br>
        <input type="number" name="num3" placeholder="Enter Number">  <br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $largest = max($num1, $num2, $num3);
        echo "The largest number is: " . $largest;
    }
    ?>
</body>

</html>