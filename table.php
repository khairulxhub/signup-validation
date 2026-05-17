<?php
 $students =[
    "khairul" => 80,
    "hasan" => 90,
    "shakib" => 70,
    "mohammad" => 50,
    "Hridoy" => 60,
 ];
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Student Name</th><th>Score</th></tr>";

foreach($students as $name => $Score){
     echo "<tr><td>$name</td><td>$Score</td></tr>";

}   

echo "</table>";
$maxscore = max($students);
$topstudent = array_search($maxscore, $students);


echo "<br><br>Highest Score: $maxscore";
echo "<br>Top Student: $topstudent";





?>

      