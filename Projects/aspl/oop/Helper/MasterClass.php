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
        public function UpdateSessionTokenData($table,$data,$id){
            try{

                $response= $this->sqlconnection();
                $this->connection=$response['connection'];
                $connection=$this->connection;

                $query='UPDATE '.$table.' SET '. $data .'  WHERE id='.$id;

                $save=mysqli_query($connection,$query);

                return $arr=['status'=>1,
                            'message'=>'Token Updated Successfully'
                            ];

            }
            catch(Exception $e){
                return $e."error on update time";
            }
        }

        public function verifyAuthToken(){
            try{
                session_start();

                $response= $this->sqlconnection();
                $this->connection=$response['connection'];
                $connection=$this->connection;

                $auth_token=isset($_SESSION['token']) ? $_SESSION['token'] : null;
                $user_id=isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null ;
                $table='employee_registration';

                if($auth_token!=null and $auth_token!=null){
                    $data="id ='".$user_id."' AND auth_token = '".$auth_token."'";
                    $query='SELECT * FROM '.$table.' WHERE '.$data;

                    $res=mysqli_query($connection,$query);
//
                    if (mysqli_num_rows($res) > 0) {
                        $row = mysqli_fetch_assoc($res);


                        return $arr=['status'=>1,
                                'message'=>'Auth  verify Successfully',
                                'data'=>$res,
                            ];

                    }else{
                         return $arr=['status'=>0,
                                'message'=>'Auth  exipre',
                                'data'=>$res,
                            ];
                    }
               }else{

                    header("Location: login.php?message=Must be Login first");
                    exit();
                }


            }
            catch(Exception $e){
                return $e."error on update time";
            }
        }
        public function leftJoinData(){
            try {

               return true;
            }
            catch(Exception $e){
                return $e.'mysql_error';

            }
        }
        public function rightJoinData(){
            try {

               return true;
            }
            catch(Exception $e){
                return $e.'mysql_error';

            }
        }
        public function crossJoinData(){
            try {

               return true;
            }
            catch(Exception $e){
                return $e.'mysql_error';

            }
        }
        public function InnerJoinData(){
            try {

               return true;
            }
            catch(Exception $e){
                return $e.'mysql_error';

            }
        }
        public function outerJoinData(){
            try {

               return true;
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
