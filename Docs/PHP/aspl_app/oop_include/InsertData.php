<?php
include_once('Connection.php');
include_once('MasterClass.php');

$conn =new Connection;
$respnose=$conn->sqlConnect();

if($respnose['status']){

      //print_r($_POST);exit;

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $date_of_birth=$_POST['date_of_birth'];
        $education=$_POST['education'];
        $address=$_POST['address'];
        $connection=$respnose['connection'];
        $table='employee_registration';
        $column='first_name,last_name,email,password,contactno,gender,brith_date,education,address';
        $data="'".$fname."','".$lname."','".$email."','".$password."','".$contact."','".$gender."','".$date_of_birth."','".$education."','".$address."'";
        //echo $data;exit;
        $save =new MasterClass;
        $Saveresponse=$save->SaveDetails($connection,$table,$column,$data);
          if($Saveresponse['status']){
              header('Location:index.php?message='.$Saveresponse['message']);
          }

    }
?>
