<?php
$pattern = "/[A-Z]{3}|[0-9]{5}$/";
$text = "Color ASD213454 red is visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo preg_match_all($pattern,$text);
