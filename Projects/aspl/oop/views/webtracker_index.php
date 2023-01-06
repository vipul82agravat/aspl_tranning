<?php

use Helper\Master\MasterClass as Mastercls;
use Helper\Auth\AuthCheck  as Authchk;
include_once('../Helper/MasterClass.php');

$check_auth =new Mastercls;
$check_auth->verifyAuthToken();

?>
<html>
<head>
<!-- jQuery -->
<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.5.1.js">
</script>

<!-- DataTables CSS -->
<link rel="stylesheet"
		href=
"https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src=
"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>
</head>
<body>
<h1 style="color: green;">
	ASPL HRM Registration
</h1>
<!-- <h3>DataTables order Option</h3> -->
    <a href="../views/registration.php">NewRegistration</a>|
    <a href="../views/index.php">EmployeeList</a>|
    <a href="../views/dailyentry.php">DailyCheckOut</a>|
    <a href="../views/checkinoutlist.php">CheckInOutList</a>|
    <a href="../views/webtracker_index.php">WebTracker</a>|
    <a href="../views/addtask.php">AddTask</a>|
    <a href="../views/logout.php">Logout</a>
<!-- HTML table with random data -->
<?php if(isset($_GET['message'])) { ?>
  <div class="alert alert-success" role="alert">
   <?php echo $_GET['message']; ?>
  </div>
<?php } ?>

<div class="filter" style="margin-left: 75%;">

<form name="" action="../Controller/FilterDate.php" method="post">
    Start Date:
    <?php if(isset($_GET['start_date']) and  isset($_GET['end_date'])) { ?>
		<input type="date" name="start_date" value= minlength="6" class="form-control" required />
		<input type="date" name="start_date" value=<?php echo $_GET['start_date']; ?> minlength="6" class="form-control" required />
	End Date	<input type="date" name="end_date" value=<?php echo $_GET['end_date']; ?> minlength="6" class="form-control" required />
	<?php } else {  ?>
	 Date	<input type="date" name="start_date" value="" minlength="6" class="form-control" required />
			<input type="date" name="end_date" value="" minlength="6" class="form-control" required />
			<input type="hidden" name="type	"  value="webtracker" minlength="6" class="form-control" required />
	<?php }   ?>

            <input type="submit" value="Filter" name="submit" class="btn-primary" /> </form>
</div>
<table id="tableID" class="display nowrap">
	<thead>
	<tr>
		<th>Task Name</th>
		<th>Task Status</th>
		<th>NumberTask</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Start DateTime</th>
		<th>End DateTime</th>
		<th>Task Description</th>
		<th>Action</th>

	</tr>
	</thead>
	<tbody>
	<?php
		$getDetails =new Mastercls;
		$table1='employee_registration';
        $table2='employee_worktracker';


		if(isset($_GET['start_date']) and isset($_GET['end_date'])){
			$start_date=$_GET['start_date'];
			$end_date=$_GET['end_date'];
			//$data="WHERE employee_attendance.emp_date='".$start_date."'";
			$data="WHERE ".$table2.".task_start_date BETWEEN '".$start_date."' AND '".$end_date."'";
			$selectData="*";
			$getResponse=$getDetails->InnerJoinData($table1,$table2,'id','emp_id',$data,$selectData);

			}else{
			$selectData="*,concat(employee_registration.last_name,'--concatstr') as last_name,REPLACE(employee_worktracker.task_description, '111','vipul REPLACE') as task_description ";//$table1.'.first_name';
			$getResponse=$getDetails->InnerJoinData($table1,$table2,'id','emp_id',$data=null,$selectData);
			}

        if($getResponse['status']==1){
		 $res=$getResponse['data'];
          if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {

              echo "<tr>";
              echo "<td>".$row['task_names'].'-'.$row['last_name']."</td>";
              echo "<td>".$row['task_status']."</td>";
              echo "<td>".$row['number_task']."</td>";
              echo "<td>".$row['task_start_date']."</td>";
              echo "<td>".$row['task_end_date']."</td>";
			   echo "<td>".$row['task_start_time']."</td>";
              echo "<td>".$row['task_end_time']."</td>";
              echo "<td>".$row['task_description']."</td>";
              echo "<td> <a href='view-task.php?id=".$row['id']."'>View</a> |<a href='edit-task.php?id=".$row['id']."'>Edit</a> |  <a  href='../Controller/DeleteData.php?id=".$row['id']."' onclick='return confirm('Are you sure you want to delete this item?');'>Delete</a></td>";
              echo "</tr>";
          }?>

	<?php }

        }else{


		}?>

	</tbody>
</table>
<script>

	// Initialize the DataTable
	$(document).ready(function () {
	$('#tableID').DataTable({

		// Set the 3rd column of the
		// DataTable to ascending order
		order: [[2, 'asc']]
		});
	});
</script>
</body>
</html>
