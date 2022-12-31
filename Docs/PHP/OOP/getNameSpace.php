<?php
namespace App\Lib1;

class MyClass {
	public function WhoAmI() {
		return __METHOD__;
	}
}

$c = __NAMESPACE__ . '\\MyClass';
$m = new $c;
echo $m->WhoAmI(); // outputs: App\Lib1\MyClass::WhoAmI
?>