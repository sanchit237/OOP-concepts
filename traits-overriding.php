<?php
//:: - This is called as scope resolution operator

//if a trait, base class and derived class has the same function name and if the trait and function is used in derived class then the first priority goes to the function defined in the derived class,then the function inside the trait and then thr function in the base class.

//how to rename a trait function and its access modifier once defined in a class
//eg.

trait A {
    public function hello(){
        echo "trait A";
    } 
}

class Base {
    // use A {
    //     A::hello as hell; // renaming a trait function just add the access modifer after as for changing.
    // }
    public function hello(){
        echo "trait base";
    }
}


class Derived extends Base {
    use A;
    public function hello(){
        echo "trait derived";
    }
}

// $base = new Base();

// $base->hell();

$derived = new Derived();

$derived->hello();