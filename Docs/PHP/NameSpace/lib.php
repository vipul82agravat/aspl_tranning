<?php
// application library 1
namespace App\Lib;

const MYCONST = 'App\Lib\MYCONST';

function MyFunction() {
	return __FUNCTION__;
}
class MyClass123 {
	static function WhoAmI($v) {
		return __METHOD__;
	}
}
?>
