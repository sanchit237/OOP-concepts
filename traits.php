<?php

//In traits we can create functions outside the class which can be accessed by any number of classes.

trait hello {
    public function test(){
        echo "testing trait";
    }
}

class A {
    use hello;
}

class B {
    use hello;
}

$data = new A();
$data->test();

$datab = new B();
$datab->test();
