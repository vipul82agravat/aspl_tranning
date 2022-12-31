<?php
include_once('Connection.php');
include_once('MasterClass.php');

$conn =new Connection;
$respnose=$conn->sqlConnect();

if($respnose['status']){
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $connection=$respnose['connection'];
        $table='employee_registration';
        $data="email='".$email."' AND password='" . $password . "'";
        $username=$email;
        $data="WHERE email='$username'
                     AND password='" . $password . "'";
        //echo $data;exit;
        $save =new MasterClass;
        $Saveresponse=$save->login($connection,$table,$data);
        $res=$Saveresponse['data'];

        if (mysqli_num_rows($res) > 0) {
              session_start();
             $_SESSION['username'] = $username;

             header('Location:index.php?message=Welcome User '.$username);

        }
        else{
              header('Location:login.php?message=Login details not match');
        }

    }
?>
