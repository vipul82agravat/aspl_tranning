
<?php

// Declare a regular expression
    $regex = "/^[897][0-9]{9}/";

// Declare a string
    $original = "96523659851";


// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all($regex, $original, $output);

print_r($output);
?>
