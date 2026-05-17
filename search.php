<?php
require_once 'constract.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $student = new student($id);
    $msg = $student->result($id);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student find</title>
</head>
<body>
     <h2>Student find </h2>

     <form action="" method="POST">
     <input type="search" name="id" placeholder="Enter student id">
     <input type="submit" name="submit" value="Search">
     </form>
 <?php  if(isset($msg)) echo $msg; ?>
</body>
</html>