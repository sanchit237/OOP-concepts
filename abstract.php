<?php
//abstract class is an incomplete class.
// once the class is defined as abstract we cannot instantiate the class.
// one abstract function has to be defined in the base class and the functionality of that function should be written in derived

abstract class ParentClass {
    public $name = "hello";

    abstract protected function hello();
}

class ChildClass extends ParentClass {
    public function hello(){
        echo "My name is : " . $this->name;
    }
}

$child = new ChildClass();

$child->hello();