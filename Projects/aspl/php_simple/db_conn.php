<?php
         $dbhost = 'localhost';
         $dbuser = 'newuser';
         $dbpass = 'password';
         $dbname = 'employee';

         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }

         echo 'Connected successfully';
?>
