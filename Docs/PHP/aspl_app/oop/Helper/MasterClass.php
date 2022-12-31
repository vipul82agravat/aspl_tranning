<?php
namespace Helper\Master;

define('HOST','localhost');
define('USER_NAME','newuser');
define('USER_PASSWORD','password');
define('DATABASE','hrm_mangement');


class MasterClass {

        public $connection;
        public $status;

        function __construct(){

           $response= $this->sqlconnection();
           $this->connection=$response['connection'];
           $this->status=$response['status'];

            if($this->status!=1){
                echo "DB Connection issuse please check congration details for connection";exit;
            }
        }
        public function login($table,$data){
            try{

            $connection=$this->connection;
            $query    = "SELECT * FROM `employee_registration`".$data;
            $res=mysqli_query($connection,$query);
            return $arr=['status'=>1,
                        'message'=>'Records List Successfully',
                        'data'=>$res,
                        ];

            }
            catch(Exception $e){
                return $e."error on save time";
            }
        }
        public function ShowDetails($table){
            try{
            $connection=$this->connection;
            $query='SELECT * FROM '.$table;
            $res=mysqli_query($connection,$query);

            return $arr=['status'=>1,
                        'message'=>'Records List Successfully',
                        'data'=>$res,
                        ];

            }
            catch(Exception $e){
                return $e."error on save time";
            }
        }
        public function ShowIdBaseDetails($table,$id){
            try{
            $connection=$this->connection;
            $query='SELECT * FROM '.$table.' WHERE id='.$id;
            $res=mysqli_query($connection,$query);

            return $arr=['status'=>1,
                        'message'=>'Records List Successfully',
                        'data'=>$res,
                        ];

            }
            catch(Exception $e){
                return $e."error on save time";
            }
        }
        public function SaveDetails($table,$column,$data){
            try{
             $connection=$this->connection;
            $query='INSERT INTO '.$table.' ('.$column.') VALUES ('.$data.')';
            $save=mysqli_query($connection,$query);

            return $arr=['status'=>1,
                        'message'=>'Records Save Successfully'
                        ];

            }
            catch(Exception $e){
                return $e."error on save time";
            }
        }
        public function UpdateDetails($table,$data,$id){
            try{

                $response= $this->sqlconnection();
                $this->connection=$response['connection'];
                $connection=$this->connection;

                $query='UPDATE '.$table.' SET '. $data .'  WHERE id='.$id;

                $save=mysqli_query($connection,$query);

                return $arr=['status'=>1,
                            'message'=>'Records Updated Successfully'
                            ];

            }
            catch(Exception $e){
                return $e."error on update time";
            }
        }
         public function DeleteDetails($table,$id){

            try{

                $response= $this->sqlconnection();
                $this->connection=$response['connection'];
                $connection=$this->connection;

                $query='DELETE  FROM '.$table.' WHERE id='.$id;

                $delete=mysqli_query($connection,$query);

                return $arr=['status'=>1,
                            'message'=>'Records Delete Successfully'
                            ];

            }
            catch(Exception $e){
                return $e."error on delete time";
            }
        }
        public function sqlconnection(){
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

namespace Helper\Auth;

    class AuthCheck {

        function AuthUser(){
            session_start();
            if(!isset($_SESSION['username']) and $_SESSION['username']==null){

                header("Location: login.php?message=Must be Login first");
                exit();

            }
        }
    }
?>
