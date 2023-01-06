
<?php

// Declare a regular expression
$regex = '/^[a-z A-Z]*$/';

// Declare a string
$nameString = 'Sharukh khan';

// Use preg_match() function to
// search string pattern
if(preg_match($regex, $nameString)) {
    echo("Name string matching with"
        . " regular expression");
    echo "\n";
    $new=strtolower($nameString);
    echo str_replace(" ", "", $new);

}
else {
    echo("Only letters and white space"
        . " allowed in name string");
}

?>
