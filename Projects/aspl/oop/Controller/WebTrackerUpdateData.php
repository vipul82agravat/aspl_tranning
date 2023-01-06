<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');

Class WebTrackerUpdateData extends Mastercls{

        public $id;
       function __construct(){
         $this->id=$_POST['id'];
      }
      public $table='employee_worktracker';

      public function UpdateTaskD(){

         session_start();
        $user_id=$_SESSION['user_id'];
        $task_names=$_POST['task_names'];
        $task_description   =$_POST['task_description'];
        $task_start_date    =$_POST['task_start_date'];
        $task_end_date=$_POST['task_end_date'];
        $task_start_time=$_POST['task_start_time'];
        $task_end_time=$_POST['task_end_time'];
        $number_task=$_POST['number_task'];
        $task_status=$_POST['task_status'];
        $complated_task=0;
        $emp_id=$user_id;

         $data="task_names = '".$task_names."', task_description = '".$task_description."', task_start_date = '".$task_start_date."', task_end_time = '".$task_end_time."', task_start_time = '".$task_start_time."', task_end_time = '".$task_end_time."', number_task = '".$number_task."', task_status = '".$task_status."'";

         return $data;

      }
}



        $updateData =new WebTrackerUpdateData;
        $table=$updateData->table;
        $data=$updateData->UpdateTaskD();
        $id=$updateData->id;





        $updateResponse=$updateData->UpdateDetails($table,$data,$id);
          if($updateResponse['status']){
              header('Location:../views/webtracker_index.php?message='.$updateResponse['message']);
          }


?>
