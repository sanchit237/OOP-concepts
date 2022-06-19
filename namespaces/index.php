<?php

//namespaces are virtual directory or folder, where in a single php file we can include classes or functions with similar names.
//eg. namespace A;
//eg. renaming namespace - namespace testing\new as A;


//Autoload magic constant allows use to autoload any number of classes using only one require line code
// eg. shown below

require "first.php";
require "second.php";

// function __autoload($class){
//     require $class.".php";
// }

$result = new first\first();

$result1 = new second\first();

