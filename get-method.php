<?php

//get method is called when we try to access a private property outside the scope or any property which does not exist.
//get method accepts a parameter

//set method fires whenwe try to assign value to a private property outside the class - see video for better undertstanding
//set methods accepts two parameters - property and value

class Test {
    private $name = "testing";
    public function __get($name){
        echo $name ." - ". "This property is either not accessible or does not exist";
    }
}

$test = new Test();

$test->name;