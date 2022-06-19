<?php

//define the data type in the parameters of the function

function sum(int $value){ //int is defined. similarly we can define for other data types as well
    echo 10 * $value;    
}

sum(20); //when number is passed as an argument

// sum("hello"); //when string is passed as an argument