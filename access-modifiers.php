<?php 

//if all the properties and methods are defined as static in a class then the class is a static class.
// an object is not needed to call a static class use the word self:: instead followed by the property or method

class Base {
    public static $name = "hello";

    public function display(){
        echo "My name is : " . self::$name;
    }
}

class Derived extends Base {
    public function display1(){
        echo "New name is : " . parent::$name;
    }
}

Derived::display1();