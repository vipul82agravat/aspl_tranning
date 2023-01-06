<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class AttendanceData extends Mastercls{

      public $table='employee_attendance';
      public $msg='checkin';

      public function dailyAttendanceData(){

         session_start();
         $checkInOutStatus=$this->employeeCheckInOutStatus($this->table);
         if($checkInOutStatus['status']==0){
                  $msg=$checkInOutStatus['message'];
                   header('Location:../views/index.php?message='.$msg);
         }
         $msg=$checkInOutStatus['message'];
         $user_id=$_SESSION['user_id'];
         $note=$_POST['note'];
         $type=$checkInOutStatus['data'];
         $date=date('y-m-d h:s:i');
            $column='type,note,emp_date,emp_id';
            $data="'".$type."','".$note."','".$date."','".$user_id."'";
            $arr=['column'=>$column,
        'data'=>$data,'msg'=>$msg];
         return $arr;

      }




}
      $insertData = new AttendanceData;
      $table=$insertData->table;
      $msg=$insertData->msg;
      $details=$insertData->dailyAttendanceData();
      $data=$details['data'];
      $column=$details['column'];
      $msg=$details['msg'];

      $saveResponse=$insertData->SaveDetails($table,$column,$data);

      if($saveResponse['status']==1){

          header('Location:../views/index.php?message='.$msg);
      }


?>
