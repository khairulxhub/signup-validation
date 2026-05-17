<?php
$arr =[
      ["id" => 1, "name" => "A","batch"=> 70 ],
      ["id" => 2, "name" => "B","batch"=> 71 ],
      ["id" => 3, "name" => "C","batch"=> 73 ],
      ["id" => 4, "name" => "D","batch"=> 74 ],
      ["id" => 5, "name" => "E","batch"=> 75 ],
   
];
class student {
    public $id;
    public $name;
    public $batch;

    function __construct($id, $name='', $batch='') {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }

    public function result($id) {
        global $arr;
        foreach ($arr as $key => $value) {
            if ($value['id'] == $id) {
                return $value;
            }
        }
        
    }
}




?>