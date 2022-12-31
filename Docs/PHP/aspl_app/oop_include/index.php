<?php
include_once('check_auth.php');
include_once('Connection.php');
include_once('MasterClass.php');

$conn =new Connection;
$respnose=$conn->sqlConnect();

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
    <a href="registration.php">NewRegistration</a>
    <a href="logout.php">Logout</a>
<!-- HTML table with random data -->
<?php if(isset($_GET['message'])) { ?>
  <div class="alert alert-success" role="alert">
   <?php echo $_GET['message']; ?>
  </div>
<?php } ?>
<table id="tableID" class="display nowrap">
	<thead>
	<tr>
		<th>First Name</th>
		<th>Last_Name</th>
		<th>Email</th>
		<th>Contactno</th>
		<th>Gender</th>
		<th>Action</th>

	</tr>
	</thead>
	<tbody>
	<?php
        if($respnose['status']){

        $connection=$respnose['connection'];
        $table='employee_registration';

        $save =new MasterClass;
        $Saveresponse=$save->ShowDetails($connection,$table);
        $res=$Saveresponse['data'];
          if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {
              echo "<tr>";
              echo "<td>".$row['first_name']."</td>";
              echo "<td>".$row['last_name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['contactno']."</td>";
              echo "<td>".$row['gender']."</td>";
              echo "<td> <a href='edit.php?id=".$row['id']."'>View</a> |<a href='edit.php?id=".$row['id']."'>Edit</a> |  <a  href='DeleteData.php?id=".$row['id']."' onclick='return confirm('Are you sure you want to delete this item?');'>Delete</a></td>";
              echo "</tr>";
          }?>

	<?php }

        } ?>

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
