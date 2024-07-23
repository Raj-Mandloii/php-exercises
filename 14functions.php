<?php

function test() {
    echo "Hello World";
}

test();

// function with args


// we can give type to args as well

function test2(string $x){
    return $x;
}

test2("Hello World!"); // passing 10 with throw error

