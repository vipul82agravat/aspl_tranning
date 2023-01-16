
<?php

// Declare a regular expression
    $regex = "/^([a-zA-Z0-9_\-\.]*)(@)[a-zA-Z]+[.][a-z]{2,4}$/";

// Declare a string
    $original = "vipul@gmail.com";


// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all($regex, $original, $output);
$isemail=preg_match($regex, $original);
echo $isemail;
if($isemail==1){
    echo "valid email";
    echo "\n";
}
echo "<pre>";
print_r($output);
?>
