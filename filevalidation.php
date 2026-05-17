<?php

if (isset($_POST['submit'])) {

    $file = $_FILES['image'];

    $final_path = "uploads/" . $file['name'];

    
    if ($file['size'] > 409600) {

        echo " <h2 style='color:green'>File size must be less than 400KB </h2>";

    }

   
    elseif (
        $file['type'] == "image/jpeg" ||
        $file['type'] == "image/png"  ||
        $file['type'] == "image/jpg"  ||
        $file['type'] == "application/pdf" ||
        $file['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    ) {

        
        // if (!is_dir("uploads     ")) {
        //     mkdir("uploads");
        // } 
 
        move_uploaded_file($file['tmp_name'], $final_path);

        $msg = "File uploaded successfully";
    }

    else {

        echo "<h3 style='color:red'>Invalid file type! Only PDF, JPG, JPEG, PNG, DOCX allowed.</h3>";
        $img = "<img src='$final_path' width='100px' height='100px'>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Validation</title>
</head>

<body>

<h2>File Validation</h2>

<form action="" method="POST" enctype="multipart/form-data">

    <label for="image">Upload File:</label>

    <input type="file" name="image" id="image">

    <br><br>

    <input type="submit" name="submit" value="Upload">

</form>
<?php if (isset($msg)) { echo $msg;} ?>
<br>
<div>
    <?php if (isset($img)) { echo $img;} ?>
</div>
</body>
</html>