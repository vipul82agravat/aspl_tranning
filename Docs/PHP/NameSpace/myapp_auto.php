<?php
use App\Lib1\MyClass as MC;

$obj = new MC();
echo $obj->WhoAmI();

// autoload function
function __autoload($class) {

	// convert namespace to full file path
	$class = $class;
	print_r($class);exit;
	//require_once($class);

}
?>