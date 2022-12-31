<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class InsertData extends Mastercls{

      public $table='employee_registration';

      public function insertData(){

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $date_of_birth=$_POST['date_of_birth'];
        $education=$_POST['education'];
        $address=$_POST['address'];

        $column='first_name,last_name,email,password,contactno,gender,brith_date,education,address';
        $data="'".$fname."','".$lname."','".$email."','".$password."','".$contact."','".$gender."','".$date_of_birth."','".$education."','".$address."'";
        $arr=['column'=>$column,
        'data'=>$data];
         return $arr;

      }


}

      $insertData = new InsertData;
      $table=$insertData->table;
      $details=$insertData->insertData();
      $data=$details['data'];
      $column=$details['column'];
      $saveResponse=$insertData->SaveDetails($table,$column,$data);
      if($saveResponse['status']==1){

          header('Location:../views/index.php?message='.$Saveresponse['message']);
      }


?>
