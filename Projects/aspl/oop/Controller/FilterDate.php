<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');


class FilterDate extends Mastercls{

      public $table='employee_attendance';
      public $username;
      public function DateFilterData(){
      ;
        $start_date=isset($_POST['start_date']) ? $_POST['start_date'] : date('y-m-d');
        $end_date=$_POST['end_date'] ? $_POST['end_date']  : date('y-m-d');
        if($_POST['type']=='webtracker'){
            if(isset($start_date) and  isset($end_date)){
                header('Location:../views/webtracker_index.php?start_date='.$start_date.'&end_date='.$end_date);
            }else if(isset($start_date)){
                header('Location:../views/webtracker_index.php?start_date='.$start_date);
            }
        }else{
          if(isset($start_date) and  isset($end_date)){
              header('Location:../views/checkinoutlist.php?start_date='.$start_date.'&end_date='.$end_date);
          }else if(isset($start_date)){
              header('Location:../views/checkinoutlist.php?start_date='.$start_date);
          }
        }
        return true;
      }

}


      $logincls = new FilterDate;
      $table=$logincls->table;

      $data=$logincls->DateFilterData();
//       $Loginresponse=$logincls->DateFilterData($table,$data);
//       $res=$Loginresponse['data'];
//
//         if (mysqli_num_rows($res) > 0) {
//               session_start();
//
//              header('Location:../views/checkinoutlist.php?message=Welcome User '.$username);
//
//         }
//         else{
//               header('Location:../views/login.php?message=Login details not match');
//         }


?>
