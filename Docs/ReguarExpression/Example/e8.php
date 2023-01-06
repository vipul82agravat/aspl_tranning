
<?php

// Declare a regular expression
    $regex = "/[^0-9]+/";

// Declare a string
    $original = "Completed Graduation in 2004";
    $replaceWith = "2002";

// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all($regex, $original, $output);

print_r($output[0]);
?>
