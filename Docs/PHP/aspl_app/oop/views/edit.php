<?php
use Helper\Master\MasterClass as Mastercls;
include_once('../Helper/MasterClass.php');

        $id=$_GET['id'];
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
        <a class="navbar-brand" rel="home" href="https://phpgurukul.com/">ASPL HRM Registration</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
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
		<form name="insert" action="../Controller/UpdateData.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="form-control" required />
       <table width="100%"  border="0">
  <tr>
    <th width="26%" height="60" scope="row">Frist Name :</th>
    <td width="74%"><input type="text" name="fname" value="<?php echo $row['first_name'] ?>" class="form-control" required /></td>
  </tr>
  <tr>
    <th width="26%" height="60" scope="row">Last Name :</th>
    <td width="74%"><input type="text" name="lname" value="<?php echo $row['last_name'] ?>" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Email :</th>
    <td><input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Contact no. :</th>
    <td><input type="text" name="contact" value="<?php echo $row['contactno'] ?>" maxlength="10" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Gender :</th>
    <?php if($row['gender']=="Male") { ?>
    <td><input type="radio" name="gender" value="Male" required  checked/> Male  &nbsp;
	<input type="radio" name="gender" value="Female" required /> Female</td>
	<?php } else { ?>
    <td><input type="radio" name="gender" value="Male" required  /> Male  &nbsp;
	<input type="radio" name="gender" value="Female" required checked /> Female</td>

    <?php }

      ?>
  </tr>
   <tr>
    <th height="60" scope="row">Date of Brith :</th>
    <td><input type="date" name="date_of_birth" value="<?php echo $row['brith_date'] ?>" class="form-control" required /></td>
  </tr>
   <tr>
    <th height="60" scope="row">Education :</th>
    <td><select name="education" class="form-control">
	<option value="">Select</option>

	<option value="10th">10th</option>
	<option value="12th">12th</option>
	<option value="Graduate">Graduate</option>
	<option value="Post Graduate">Post Graduate</option>
	</select> </td>
  </tr>
  <tr>
    <th height="60" scope="row">Address :</th>
    <td><textarea name="address" class="form-control"><?php echo $row['address'] ?>
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
