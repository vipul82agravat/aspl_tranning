<?php
include_once('Connection.php');
include_once('MasterClass.php');

$conn =new Connection;
$respnose=$conn->sqlConnect();

if($respnose['status']){

        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $date_of_birth=$_POST['date_of_birth'];
        $education=$_POST['education'];
        $address=$_POST['address'];
          $connection=$respnose['connection'];
          $table='employee_registration';

      //         $data="first_name = '".$fname."', last_name = '".$lname."', email = '".$email."', contactno = '".$contact."', gender = '".$gender."', brith_date = '".$date_of_birth."', education = '".$education."', address = '".$address."'";
      //

          $data="first_name = '".$fname."', last_name = '".$lname."', email = '".$email."', contactno = '".$contact."', gender = '".$gender."', education = '".$education."', address = '".$address."'";

        $save =new MasterClass;
        $Saveresponse=$save->UpdateDetails($connection,$table,$data,$id);
          if($Saveresponse['status']){
              header('Location:index.php?message='.$Saveresponse['message']);
          }

    }
?>
