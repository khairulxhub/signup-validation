<?php
$students = [
    "Khairul" => 80,
    "Arif" => 100,
    "Sabbir" => 70,
    "Niloy" => 50,
    "Hridoy" => 60,
    "Ruksana" => 90,
];




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>Name</th>

            <th>Score</th>
        </thead>

        <?php foreach ($students as $name => $Score) : ?>


         <tr>
            <td> <?= $name; ?></td>
            <td> <?= $Score; ?></td>
        </tr>
       <?php endforeach ?>



       

     
    </table>
  <!-- <h5>Highest Score: <?php echo max($students); ?></h5> -->
  <!-- <h5>Lowest Score: <?php echo min($students); ?></h5> -->
  <!-- <h5>Top Student: <?php echo array_search(max($students), $students); ?></h5> -->
  <!-- <h5>Lowest Student: <?php echo array_search(min($students), $students); ?></h5> -->


  <h5>Highest Score: <?php $max_score=max($students); echo $max_score ?></h5>
  <h5>Lowest Score: <?php echo min($students); ?></h5>
  <h5>Top Student: <?php echo array_search($max_score, $students); ?></h5>
  <h5>Lowest Student: <?php echo array_search(min($students), $students); ?></h5>
</body>

</html>