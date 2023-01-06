<?php

// Declare a regular expression
$regex = "([0-9]+)";

// Declare a string
$original = "Completed graduation in 2004";
$replaceWith = "2002";

// Use ereg_replace() function to search a
// string pattern in an other string
$original = ereg_replace($regex, $replaceWith, $original);

// Display result
echo $original;

?>
