<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');
        session_start();
        $id=$_SESSION['user_id'];
        $getDetails =new Mastercls;
		$table='employee_registration';
        $getResponse=$getDetails->ShowIdBaseDetails($table,$id);

        if($getResponse['status']==1){
                    $res=$getResponse['data'];
                    if (mysqli_num_rows($res) > 0) {
                      $row = mysqli_fetch_assoc($res);
                    //
                  }

        }
?>
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
        <a class="navbar-brand" rel="home" href="checkinoutlist.php">ASPL HRM Daily Entry</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>a
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>

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
		<form name="login" action="../Controller/AttendanceData.php" method="post">
       <table width="100%"  border="0">

  <tr>
    <th height="60" scope="row">Welcome  :</th>
    <td><?php echo $row['first_name'] ?>-<?php echo $row['last_name'] ?></td>
  </tr>
   <tr>
    <th height="60" scope="row">Note :</th>
    <td><textarea name="note" class="form-control">
	</textarea></td>
  </tr>

<!--  <tr>
    <th height="60" scope="row">Hobbies :</th>
    <td><input type="checkbox" name="hobbies" value="Read" required /> Read  &nbsp;
	<input type="checkbox" name="hobbies" value="traveling" required /> Traveling</td>
  </tr>-->
  <tr>
    <th height="60" scope="row">&nbsp;</th>
    <td><input type="submit" value="submit" name="submit" class="btn-primary" /></td>
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
