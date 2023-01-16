<?php

// Declare a string
$str = "php b string example";

// Declare a regular expression
$regex = "/ /";

// Use preg_split() function to
// convert a given string into
// an array
$output = preg_split ($regex, $str,-1,PREG_SPLIT_OFFSET_CAPTURE );

print_r($output);

?>
