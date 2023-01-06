<?php
$pattern ='^[a-zA-Z0-9]{1, }$+';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_match($pattern, $text);
?>
