<?php
//call method is called when a user tries to call a private method or non-existing method outside a class.
//call method needs to be pass two arguments -1. name of method and 2. arguments passed in a method.
//This method is also used for calling the function from outside - see video for better understanding.

class A {
    private $name; 
    private function hello($data){
        echo $this->name = $data;
    }

    public function __call($method, $args){
        echo $method. "does not exist";
        print_r($args);
    }
}


$test = new A();

$test->hello("hey");