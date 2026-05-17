<?php
$student_arr = [
    "Sabbir" => "89",
    "Hasan" => "69",
    "allu" => "80",
    "Vijay" => "56",
    "khairul" => "75",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 9. Students Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php foreach($student_arr as $name => $score) : ?>
        <tr>
            <td><?= $name; ?></td>
            <td><?= $score; ?></td>
        </tr>
        <?php endforeach;   ?>
    </table>
    <p>Highest mark: <?= max($student_arr); ?></p>
    <p>Student Name: <?= array_search(max($student_arr), $student_arr); ?></p>

    <!-- /* 9	Create an associative array of 5 elements where index will be Student name and value will be corresponding score. Present a result sheet using table. Find out the maximum score and student name.                                               */ -->
</body>
</html>