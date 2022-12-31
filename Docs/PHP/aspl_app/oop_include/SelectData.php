<?php
include_once('Connection.php');
include_once('MasterClass.php');

$conn =new Connection;
$respnose=$conn->sqlConnect();

if($respnose['status']){

        $connection=$respnose['connection'];
        $table='employee_registration';

        $save =new MasterClass;
        $Saveresponse=$save->ShowDetails($connection,$table);
        $res=$Saveresponse['data'];
          if (mysqli_num_rows($res) > 0) {
          echo "<table>";
          echo "<tr>";
          echo "<th>Firstname</th>";
          echo "<th>Lastname</th>";
          echo "<th>age</th>";
          echo "</tr>";
          while ($row = mysqli_fetch_array($res)) {
              echo "<tr>";
              echo "<td>".$row['first_name']."</td>";
              echo "<td>".$row['last_name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "</tr>";
          }
          echo "</table>";
          mysqli_free_result($res);
    }
    else {
        echo "No matching records are found.";
    }


    }
?>
