<?php
$arr = [
    ["id" => "101", "Name" => "Sabbir", "Batch" => 70],
    ["id" => "102", "Name" => "Arif", "Batch" => 70],
    ["id" => "103", "Name" => "Hridoy", "Batch" => 70],
    ["id" => "104", "Name" => "Jaber", "Batch" => 70],
    ["id" => "105", "Name" => "Masum", "Batch" => 70],

];
class student
{
    public $id;
    public $Name;
    public $Batch;

    public function __construct($id, $Name = "", $Batch = "")
    {
        $this->id = $id;
        $this->Name = $Name;
        $this->Batch = $Batch;
    }

    public function result($id)
    {
        global $arr;
        foreach ($arr as $item) {
            if ($item['id'] == $id) {
                $res = "ID: {$item['id']} <br>";
                $res .= "Name: {$item['Name']} <br>";
                $res .= "Batch: {$item['Batch']} <br>";
                return $res;
            }
        }
    }
}
