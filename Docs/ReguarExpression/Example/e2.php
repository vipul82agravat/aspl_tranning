<?php
$pattern = "/[a-v].*/";
$replacement = "-";
$text = "Earth revolves around the\tSun";

echo preg_match($pattern, $text);
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
// Replace only spaces
echo str_replace(" ", "-", $text);
?>
