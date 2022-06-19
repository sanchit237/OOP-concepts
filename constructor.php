<?php

class Person {
    public $name, $age;

    function __construct( $name, $age ){ //Also default values can be passed to constructor $name = ""sanchit" & $age = 20
        $this->name = $name;
        $this->age = $age;
    }

    public function show(){
        echo $this->name . "-" . $this->age;
    }
}

// $p1 = new Person( "sanchit", 20 );

// $p1->show();


//inheritance functionality
class Person2 extends Person{

}

$person2 = new Person2("hello", 20);
$person2->show();