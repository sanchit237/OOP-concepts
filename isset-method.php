<?php

//isset method is called when a user tries to check the isset function for a private property

class Test {
    public $hi;
    private $name;

    public function hello($hi, $name){
        echo $this->hi = $hi . "<br>";
        echo $this->name = $name . "<br>";
    }

    public function __isset($property){
        echo isset($this->$property);
    }
}

$data = new Test();
$data->hello("abc","def");

echo isset($data->hi) . "<br>"; //returns 1

echo isset($data->name) . "<br>"; //returns 0 when magic constant is not called

