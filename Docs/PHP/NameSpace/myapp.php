<?php
//use App\Lib1; //use

header('Content-type: text/plain');
require_once('lib.php');
require_once('lib1.php');

echo \App\Lib\MYCONST . "\n";
echo \App\Lib\MyFunction() . "\n";
echo \App\Lib\MyClass::WhoAmI() . "\n";

echo \App\Lib1\MYCONST . "\n";
echo \App\Lib1\MyFunction() . "\n";
echo \App\Lib1\MyClass::WhoAmI() . "\n";
?>