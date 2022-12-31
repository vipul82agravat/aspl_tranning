<?php
namespace App\Lib1;
namespace App\Lib;
require_once('lib.php');
require_once('lib1.php');

header('Content-type: text/plain');
echo MYCONST . "\n";
echo MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";
?>