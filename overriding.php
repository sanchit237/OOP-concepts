<?php 

//overriding means derived class having the same variable or function name as the base class.
//The derived class function or variable overrrides that of the base class

class Base {
    public $name = "test";

    public function hello(){
        echo "original";
    }
}

class Derived extends Base {
    public $name = "testing";

    public function hello(){
        echo "dummy";
    }
}

$derived = new Derived();

echo $derived->name;

$derived->hello();