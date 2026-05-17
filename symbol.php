<?php
// Login Registration Validation Program

$username = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];

    // Check username length
    if (strlen($username) < 4 || strlen($username) > 8) {
        $error = "Username must be between 4 to 8 characters.";
    }
    // Check for @ symbol
    elseif (strpos($username, "@") === false) {
        $error = "Username must contain '@' symbol.";
    }
    else {
        $error = "Login Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Registration Validation</title>
</head>
<body>

<h2>Login Registration Form</h2>

<form method="post" action="">
    Username:
    <input type="text" name="username" required>
    <br><br>

    <input type="submit" value="Register">
</form>

<br>

<?php
if ($error != "") {
    echo $error;
}
?>

</body>
</html>