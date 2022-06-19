<?php

//invoke method is triggered when a user tries to create the function of the class object.
// eg. $test = new test();
//     $test();


class Calculation {
    public $a;
    public $b;

    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(){
        echo $this->a + $this->b;
    }

    public function __invoke(){
        echo $this->a + $this->b;
    }
}

$result = new Calculation(10,20);

// $result->sum();

$result(); //function of the object created and invoke methos is triggered