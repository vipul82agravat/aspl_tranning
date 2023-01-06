<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class InsertData extends Mastercls{

      public $table='employee_registration';

      public function insertData(){

         $fileName = basename($_FILES["image"]["name"]);
         $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
         $allowTypes = array('jpg','png','jpeg','gif');
        $imgContent ='';
         if(in_array($fileType, $allowTypes)){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

         }

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $date_of_birth=$_POST['date_of_birth'];
        $education=$_POST['education'];
        $address=$_POST['address'];
        $permission='{"super_admin":"0","admin":"0","user":"1"}';
        $column='first_name,last_name,email,password,contactno,gender,brith_date,image,education,address,permission';
        $data="'".$fname."','".$lname."','".$email."','".$password."','".$contact."','".$gender."','".$date_of_birth."','".$imgContent."','".$education."','".$address."','".$permission."'";
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
