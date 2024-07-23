<?php

echo "Hello";
$x = "  Hello World  ";
echo $x;

// to get the length of String
echo strlen($x);
// to get the war count of string
echo str_word_count($x);
// to reverse the string
echo strrev($x);
// to search in string
echo strpos($x, "H");
// to replace string
echo str_replace("Hello", "Hi", $x);
// to upper case the string
echo strtoupper($x);
// to lower case the string
echo strtolower($x);
// to removed the white space from the string
echo trim($x);
// convert string to array
$y = explode(" ", $x);
print_r($y); // you can just direct echo an array, it does not make any sense
echo $y[3]; // you can echo this [index]
// String concatenation
echo "Hello" . " " . "World";
// Slicing the string
echo substr($x, 0, 5);
