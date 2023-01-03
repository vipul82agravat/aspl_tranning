<?php

interface FamilyFactoryInterface {
    public function create() : Family;
}
class Family
{
 public function __construct(){
        echo "object is created";
 }
}
class FamilyFactory implements FamilyFactoryInterface {
    public function create() : Family {
        $family = new Family();
        // initialize your family
        return $family;
    }
}

$d= new FamilyFactory();
$fun=$d->create();
var_dump($fun);
?>
