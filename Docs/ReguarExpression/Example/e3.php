<?php
$pattern = "/[0,3]+/";
$text = "My favourite 123 colors are red, green and blue";
$parts = preg_split($pattern, $text);

// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "\n    ";
}
?>
