<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');

Class UpdateData extends Mastercls{
        public $id;
       function __construct(){
         $this->id=$_POST['id'];
      }
      public $table='employee_registration';

      public function UpdateClinetDetails(){

        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $date_of_birth=$_POST['date_of_birth'];
        $education=$_POST['education'];
        $address=$_POST['address'];
         $data="first_name = '".$fname."', last_name = '".$lname."', email = '".$email."', contactno = '".$contact."', gender = '".$gender."', education = '".$education."', address = '".$address."'";

         return $data;

      }
}



        $updateData =new UpdateData;
        $table=$updateData->table;
        $id=$updateData->id;

        $data=$updateData->UpdateClinetDetails();

        $updateResponse=$updateData->UpdateDetails($table,$data,$id);
          if($updateResponse['status']){
              header('Location:../views/index.php?message='.$updateResponse['message']);
          }


?>
