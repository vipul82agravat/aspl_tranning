<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class DeleteData extends Mastercls{

      public $table='employee_registration';
      public $id;
      function __construct(){
        $this->id=$_GET['id'];
      }


}


        $delete =new DeleteData;
        $id=$delete->id;
        $table=$delete->table;
        $deleteResponse=$delete->DeleteDetails($table,$id);
          if($deleteResponse['status']==1){
              header('Location:../views/index.php?message='.$Saveresponse['message']);
          }


?>
