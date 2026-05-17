<?php
$email_error = "";
$password_error = "";
$confirm_password_error = "";
$msg = "";

if(isset($_POST["submit"])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   
    if(empty($email)){
        $email_error = "Email is required";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Email is not valid";
    }else{
        $email_error = "";
    }

  
    if(empty($password)){
        $password_error = "Password is required";
    }elseif(strlen($password) < 8){
        $password_error = "Password minimum length of 8 characters";
    }else{
        $password_error = "";
    }

    if(empty($confirm_password)){
        $confirm_password_error = "Confirm Password is required";
    }elseif($password != $confirm_password){
        $confirm_password_error = "Passwords do not match";
    }else{
        $confirm_password_error = "";
    }

  
    if($email_error == "" && $password_error == "" && $confirm_password_error == ""){
        $msg = "Form submitted successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Validation Registration</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="" method="POST">

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"> <br>
    <span style="color:red;">
        <?php echo $email_error; ?>
    </span>

    <br><br>

    <label>Password:</label>
    <input type="password" name="password" > <br>
    <span style="color:red;">
        <?php echo $password_error; ?>
    </span>

    <br><br>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password">
   

    <br><br>

    <button type="submit" name="submit">Register</button>

</form>

<br>


<span style="color:green;">
    <?php echo $msg; ?>
</span>

</body>
</html>