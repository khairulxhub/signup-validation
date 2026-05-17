<?php
class student {
    public $id;
    public $name;
    public $score;
    public $grade;

    function __construct($_id=null, $_name=null, $_score=null, $_grade=null){
        $this->id = $_id;
        $this->name = $_name;
        $this->score = $_score;
        $this->grade = $_grade;
    }
    function result($_id){
        $html= "";
        $file = fopen("student.csv", "r");
        while ($row = fgetcsv($file)){
            if($_id == $row[0]){
                $html .="
                ID: $row[0] <br>
                Name: $row[1] <br>
                score: $row[2] <br>
                Grade: $row[3] <br>
                ";
            }
        }
        fclose($file);
        return $html;
    }
}
$student = new Student();
if(isset($_POST['login'])){
    $id = $_POST['id'];

    if(!empty($id)){
        $result = $student->result($id);
    } else{
        $result = "please Entert ID";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Find ID</title>
</head>
<body>
    <form  action="" method="POST">
  <label for=""> Enter Student ID </label> <br> 
  <input type="search" name="id" id=""> <br>
  <button type="submit" name="login">Search</button>
  <!-- 2	Create a class named student where fields are id, name, batch and one method result which will take id as parameter and search the corresponding result from a file and print result. Must use constructor to initialize the data and print a result.                                                                                                                                     -->
    </form>
    <P> <?= $result ?? "" ?> </p>
</body>
</html>