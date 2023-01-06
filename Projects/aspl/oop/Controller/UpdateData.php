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

         $permission=json_encode($_POST['permission']);

         $fileName = basename($_FILES["image"]["name"]);
         $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
         $allowTypes = array('jpg','png','jpeg','gif');
         $imgContent='';
         if(in_array($fileType, $allowTypes)){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

         }
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $date_of_birth=$_POST['date_of_birth'];
        $education=$_POST['education'];
        $address=$_POST['address'];
         $data="first_name = '".$fname."', last_name = '".$lname."', email = '".$email."', contactno = '".$contact."', gender = '".$gender."', image = '".$imgContent."', education = '".$education."', address = '".$address."', permission= '".$permission."'";

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
