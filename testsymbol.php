<?php
$username = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username']; 

    if(strlen($username) < 4 || strlen($username) > 8){
        $error = "Username must be between 4 to 8 characters.";
    } elseif(strpos($username, "@") == false){
        $error = "Username must contain '@' symbol.";
    }
    else{
        $error = "Login Registration Successful!";  
    }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Registration Validation</title>
</head>
<body>
    <h2>LOgin Registration Validation</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Submit">
    </form>

    <br>
    <?php
    if($error != "") {
        echo $error;
    }
    ?>
</body>
</html>