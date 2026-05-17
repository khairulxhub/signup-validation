<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIME NUMBER or Not </title>
</head>

<body>
    <h2>PRIME NUMBER or NOT</h2>
    <form action="" method="post">
        <input type="number" name="num" placeholder="Enter Number">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $count = 0;
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            echo "PRIME NUMBER";
        } else {
            echo "NOT PRIME NUMBER";
        }
    }
    ?>
</body>

</html>