<?php 

//if there are multiple functions in a class then we can create a single object and call all the functions at the same time.
//but every function should return $this at the end.

class ABC {
    public function first(){
        echo "first function\n";
        return $this;
    }
    public function second(){
        echo "second function\n";
        return $this;
    }
    public function third(){
        echo "third function\n";
        return $this;
    }
    public function fourth(){
        echo "fourth function\n";
        return $this;
    }
}

$result = new ABC();

// $result->first(); //single method calling

$result->first()->second()->third()->fourth(); //method chaining

