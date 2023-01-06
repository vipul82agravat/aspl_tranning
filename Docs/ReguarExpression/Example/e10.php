<?php

// Declare a string
$ip = "134.645.478.670";

// Declare a regular expression
$regex = "/\./";

// Use preg_split() function to
// convert a given string into
// an array
$output = preg_split ($regex, $ip);

echo "$output[0].'\n';
echo "$output[1] .'\n'";
// echo "$output[2] <br>";
// echo "$output[3] <br>";

?>
