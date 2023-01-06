<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>ASPL HRM Registration | DEMO</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="webtracker_index.php">ASPL Web Tracker</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>a
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a href="index.php">Back</a>
	</div>

</nav>

<div class="container-fluid">
<?php if(isset($_GET['message'])) { ?>
  <div class="alert alert-success" role="alert">
   <?php echo $_GET['message']; ?>
  </div>
<?php } ?>
 <!--/left-->

  <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
<!--         <h3>Insert Data In Databse using PHP OOPS Concept</h3> -->
		<form name="insert" action="../Controller/WebTrackerInsertData.php" method="post" enctype="multipart/form-data">
       <table width="100%"  border="0">
  <tr>
    <th width="26%" height="60" scope="row">Task Name :</th>
    <td width="74%"><input type="text" name="task_names" value="" class="form-control" required /></td>
  </tr>
  <tr>
    <th width="26%" height="60" scope="row">Number Task :</th>
    <td width="74%"><input type="Number" name="number_task" value="1" class="form-control" required /></td>
  </tr>

   <tr>
    <th height="60" scope="row">Task Start Date :</th>
    <td><input type="date" name="task_start_date" value="" class="form-control" required /></td>
  </tr>
   <tr>
    <th height="60" scope="row">Task End Date :</th>
    <td><input type="date" name="task_end_date" value="" class="form-control" required /></td>
   </tr>
    <tr>
    <th height="60" scope="row">Task Start Time :</th>
    <td><input type="datetime-local" name="task_start_time" value="" class="form-control"  /></td>
  </tr>
   <tr>
    <th height="60" scope="row">Task End Time :</th>
    <td><input type="datetime-local" name="task_end_time" value="" class="form-control"  /></td>
   </tr>
  <tr>
    <th width="26%" height="60" scope="row">Complated Task :</th>
    <td width="74%"><input type="Number" name="complated_task" value="0" class="form-control" required /></td>
  </tr>
   <tr>
    <th height="60" scope="row">Task Status :</th>
    <td><select name="task_status" class="form-control">
	<option value="">Select</option>
	<option value="Done">Done</option>
	<option value="Pending" selected>Pending</option>
	<option value="Proccssing">Proccssing</option>
	</select> </td>
  </tr>
  <tr>
    <th height="60" scope="row">Task Description :</th>
    <td><textarea name="task_description" class="form-control">
	</textarea></td>
  </tr>
<!--  <tr>
    <th height="60" scope="row">Hobbies :</th>
    <td><input type="checkbox" name="hobbies" value="Read" required /> Read  &nbsp;
	<input type="checkbox" name="hobbies" value="traveling" required /> Traveling</td>
  </tr>-->
  <tr>
    <th height="60" scope="row">&nbsp;</th>
    <td><input type="submit" value="Submit" name="submit" class="btn-primary" /></td>
  </tr>
</table>

     </form>

      </div>
    </div>
    <hr>


  </div><!--/center-->
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
