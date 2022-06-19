<?php

//destructor method is a magic method which is called automatically at the end when all the functions of a particular class are executed

class Test {
    public function __construct(){
        echo "constructor function<br>"; 
    }

    public function hello(){
        echo "Hello function<br>"; 
    }

    public function __destruct(){
        echo "destructor function<br>"; 
    }
}


$test = new Test();

$test->hello();