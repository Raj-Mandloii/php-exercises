<?php

function a () {

    return __FUNCTION__;
}
echo a(); // return the name of function
echo "<br />";

// means pre defined constants
echo __LINE__; // why is exists 
echo "<br />";
echo __FILE__;
echo "<br />";
echo __DIR__;
echo "<br />";
echo __FUNCTION__;
echo "<br />";
echo __CLASS__;
echo "<br />";
echo __TRAIT__;
echo "<br />";
echo __METHOD__;