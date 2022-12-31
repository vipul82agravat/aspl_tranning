<?php
define('HOST','localhost');
define('USER_NAME','newuser');
define('USER_PASSWORD','password');
define('DATABASE','hrm_mangement');


class Connection{

    function __construct(){

    }
    public function sqlConnect(){
            try {
                $conn = mysqli_connect(HOST, USER_NAME,USER_PASSWORD,DATABASE);
                if(! $conn ) {
                    die('Could not connect: ' . mysql_error());
                }
                $arr=[
                    'status'=>'1',
                    'connection'=>$conn
                    ];
                return $arr;
            }
            catch(Exception $e){
                return $e.'mysql_error';

            }
    }
}
?>
