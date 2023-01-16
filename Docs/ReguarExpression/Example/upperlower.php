
<?php

// Declare a regular expression
    $regex = "/[A-Z][a-z]*[0-9]{1}[a-z]*/";

// Declare a string
    $original = "VIPU1111a";


// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all($regex, $original, $output);
echo preg_match($regex, $original);

print_r($output);
?>
