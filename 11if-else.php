<?php

// if else in php

$x = 10;


if ($x == 10) {
    echo "x is 10";
} else if ($x <= 10) {
    echo "x is less than 10";
} else {
    echo "x is greater than 10";
}

// inline if else (Ternary Operators)

$y = $x == 10 ? "x is 10" : "x is not 10";
echo $y;