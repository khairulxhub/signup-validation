<?php

$username = "";
$error = "";

if (isset($_POST['username'])) {

    $username = $_POST['username'];

    if ($username == "") {

        $error = "Username cannot be empty";
    } elseif (strlen($username) < 4 || strlen($username) > 8) {

        $error = "Username must be between 4 and 8 characters";
    } elseif (strpos($username, "@") === false) {

        $error = "Username must contain @";
    } else {

        $error = "Username is valid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation Form</title>
</head>

<body>

    <h2>Login Validation Form</h2>

    <form action="" method="POST">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <br><br>

        <input type="submit" value="Login">

    </form>

    <br>

    <?php
    if ($error != "") {
        echo $error;
    }
    ?>

</body>

</html>