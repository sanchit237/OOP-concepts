<?php

//toString magic constant fires when an user tries to access the object of a particular class as a string

class abc {
    public function __toString(){
        return "cant print object of a class as a string : " . get_class($this);
    }
}

$abc = new abc();

echo $abc;