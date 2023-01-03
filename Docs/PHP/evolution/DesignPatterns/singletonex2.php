<?php
class Singleton
{
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }
    protected function __construct()
    {
    }
    private function __clone()
    {
    }
    public function __wakeup()
    {
    }
}
class SingletonChild extends Singleton
{
}
$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());
$obj2 = SingletonChild::getInstance();
var_dump($obj2 === Singleton::getInstance());
?>
