
<?php

// Declare a regular expression
    $regex = "/\d+(111)/";
//     $regex = "/\[0-9]/";

// Declare a string
    $original = "VIPU1111a 111 vip";


// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all($regex, $original, $output);
echo preg_match($regex, $original);

print_r($output);
?>
