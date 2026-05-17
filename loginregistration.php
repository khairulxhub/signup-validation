<?php

function validateUsername($username) {

    if(strlen($username) < 4 || strlen($username) > 8) {
        return "Username must be between 4 to 8 characters.";
    }

    if(strpos($username, "@") === false) {
        return "Username must contain @ symbol.";
    }

    return "Valid Username.";
}


if(isset($_POST['login'])) {

    $username = $_POST['username'];
    


    $message = validateUsername($username);

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation login registration</title>
</head>
<body>
    <h2>Login Registration</h2>
    <form action="" method="post">
        <label for=""> User Name</label> <br>
        <input type="text" name="username"> <br>
        
        <input type="submit" value="Login" name="login">
    </form>

    <?php if(isset($message)){
        echo "<h3>$message </h3>";
    }
    ?>
</body>
</html>