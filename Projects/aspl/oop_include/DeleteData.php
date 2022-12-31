<?php
include_once('Connection.php');
include_once('MasterClass.php');

$conn =new Connection;
$respnose=$conn->sqlConnect();

if($respnose['status']){


        $id=$_GET['id'];
        $connection=$respnose['connection'];
        $table='employee_registration';
        $save =new MasterClass;
        $Saveresponse=$save->DeleteDetails($connection,$table,$id);
          if($Saveresponse['status']){
              header('Location:index.php?message='.$Saveresponse['message']);
          }

    }
?>
