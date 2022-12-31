<?php
trait ConstantsTrait {
    public const FLAG_MUTABLE = 1;
    final public const FLAG_IMMUTABLE = 5;
}

class ConstantsExample {
    use ConstantTrait;
}

$example = new ConstantExample;
$example::FLAG;
?>