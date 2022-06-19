<?php

//The object of a class cannot be stored in a file, session or database directly.
//For storing we need to convert the object in an arrray using serialize function.
//The sleep method triggers when we serialize the object.
//sleep method allows us to define only that values we need to be passed in the array.


//wakeup method is opposite of sleep method it triggers when we unserialize the object.
// wakeup method works when we convert the serialize array again back to object.

class test {
    public $name = "hello"; 
    public $data = "hii";

    public function __sleep(){
        return array('name');
    }

    public function __wakeup(){
        echo "Wakeup method";
    }    
}

$result = new test();

$srl = serialize($result);

// echo $srl;

$us = unserialize($srl);
print_r($us);