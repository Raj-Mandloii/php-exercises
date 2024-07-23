<?php
// Data type 
// String
// Integer
// Float
// Boolean
// Array
// Object
// NULL
// Resource

// to get the data type we use var_dump()
// EX
$x = 0;
var_dump($x); // this will give --> int(1)


// String 
$x = "String";

// Integer
$x = 0;
// Float
$x = 10.5;
// Boolean
$x = true;

// Array    
$x = ["array", 1, 1.23];

// Object

class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$x = new Car("Red", "Mustang");
echo $x->message();

// NULL
$x = null;

// Resource
// LATER