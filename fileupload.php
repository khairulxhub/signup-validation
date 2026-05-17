<?php
if (isset($_POST['submit'])) {
    $file = $_FILES["file"];

    if (empty($file["tmp_name"])) {
        $msg = '<p style="color:red;">Please select a file</p>';
    } else {
        $type = mime_content_type($file["tmp_name"]);

        $allowed_types = [
            "image/jpg",
            "image/jpeg", 
            "image/png", 
            
        ];

        $file_path = $file['name'];
    
        if ($file["size"] > (500 * 1024)) {
            $msg = '<p style="color:red;">The Maximum file size is 500KB </p>';
        } elseif (!in_array($type, $allowed_types)) { 
            $msg = '<p style="color:red;">File must be JPG/PNG/JPEG</p>';
        } else {
            move_uploaded_file($file['tmp_name'], $file_path);
            
            if (strpos($type, 'image/') === 0) {
                $img_hmtl = "<img style='height:200px; width:auto;' src='{$file_path}'>";
            } else {
                $img_hmtl = "<p style='color:green;'>File uploaded successfully!</p>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
     <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Upload a file</label><br>
        <input type="file" name="file" id=""><br><br>
        <button type="submit" name="submit">Upload</button>
    </form>
    <?= $msg ?? "" ?>
    <?= $img_hmtl ?? "" ?>
</body>
</html>