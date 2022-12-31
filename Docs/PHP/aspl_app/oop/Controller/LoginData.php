<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class LoginData extends Mastercls{

      public $table='employee_registration';
      public $username;
      public function loginData(){

        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $username=$email;
        $this->username=$username;
        $data="WHERE email='$username'
                     AND password='" . $password . "'";
         return $data;

      }

}

      $logincls = new LoginData;
      $table=$logincls->table;
      $data=$logincls->loginData();
      $Loginresponse=$logincls->login($table,$data);
      $res=$Loginresponse['data'];

        if (mysqli_num_rows($res) > 0) {
              session_start();
             $_SESSION['username'] = $_POST['email'];;

             header('Location:../views/index.php?message=Welcome User '.$username);

        }
        else{
              header('Location:../views/login.php?message=Login details not match');
        }


?>
