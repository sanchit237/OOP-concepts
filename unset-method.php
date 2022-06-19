<?php

//isset method is called when a user tries to unset function for a private property

class Test {
    public $hi;
    private $name;

    public function hello($hi, $name){
        echo $this->hi = $hi . "<br>";
        echo $this->name = $name . "<br>";
    }

    public function __unset($property){
        unset($this->$property);
    }
}

$data = new Test();
$data->hello("abc","def");

unset($data->hi); //unsets

unset($data->name);  //Does not unset when magic constant is not called

