<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class WebTrackerInsertData extends Mastercls{

      public $table='employee_worktracker';

      public function insertTaskData(){

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

        $column='task_names,task_description,task_start_date,task_end_date,task_start_time,task_end_time,number_task,task_status,emp_id,complated_task';
        $data="'".$task_names."','".$task_description."','".$task_start_date."','".$task_end_date."','".$task_start_time."','".$task_end_time."','".$number_task."','".$task_status."','".$user_id."','".$complated_task."'";
        $arr=['column'=>$column,
        'data'=>$data];

        return $arr;

      }


}

      $insertData = new WebTrackerInsertData;
      $table=$insertData->table;
      $details=$insertData->insertTaskData();
      $data=$details['data'];
      $column=$details['column'];

      $saveResponse=$insertData->SaveDetails($table,$column,$data);

      if($saveResponse['status']==1){

          header('Location:../views/webtracker_index.php?message='.$saveResponse['message']);
      }


?>
