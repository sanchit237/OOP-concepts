<?php
//call static method fires when a user tries to access a private static method outside the class or a method which does not exist and also to set a condition to call the method from outside.

class ABC {
    private static function hello($name){
        echo "hey there :" . $name;
    }

    public static function __callStatic($method, $args){
        // echo "Trying to access a private method named:". $method;
        if (method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__, $method], $args);
        }
        else {
            echo "Trying to access a method which does not exist:". $method;
        }
    }
}

ABC::hello("hey");
// ABC::hi("hi");