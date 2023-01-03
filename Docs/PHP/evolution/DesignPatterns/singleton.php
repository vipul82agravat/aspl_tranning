<?php

class Connection{

    protected static $conn=false;
    protected function __construct(){
    echo "db connection";
    }
    private function __clone(){

    }
    public function __wakeup(){

    }
    public static function getObject(){

        if(!self::$conn){
            self::$conn=new self();
        }
        return self::$conn;
    }
}
class ConnectionChild extends Connection
{

}

    $db=Connection::getObject();
    $db1=ConnectionChild::getObject();
    var_dump($db === $db1);
    var_dump(Connection::getObject() === ConnectionChild::getObject());
    var_dump($db=== ConnectionChild::getObject());

?>
