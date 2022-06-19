<?php
//Multiple inheritance is not possible so derived class can use multiple functions through interface
//interfaces are used for security purpose.
//interfaces are similar to abstract class but properties cant be defined in an interface and access modifiers cant be assigned to methods
//methods can be declared in an interface and execution is done in the derived class

interface A {
    function add($a, $b);
}

interface B {
    function mul($a, $b);
}

class Demo implements A,B {
    function add($a, $b){
        echo $a + $b;
    }

    function mul($a, $b){
        echo $a * $b;
    }
}


$data = new Demo();

$data->add(10, 20);

echo "<br>";

$data->mul(10, 20);
