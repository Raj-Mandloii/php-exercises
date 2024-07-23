<?php

$x = 5;
$y = 'John';
// First way
echo "Hello $x $y";
// second way around 
echo "Hello" . $x . $y . "!";

// to get the type of variable
var_dump($x);
var_dump($y);

// scope
// variables declared outside of functions have global scope
// for example: both the above vars have global scope
// in order to use global function inside the function we use
function test()
{
    global $x;
    echo $x;
    // this we throw error
    // echo $y;
}

function test1()
{
    static $x = 5;
    // this variable is not delete when the function is finish executing, because it is declared using static
}









