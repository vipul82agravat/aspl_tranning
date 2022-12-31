<?php
     session_start();
     if(!isset($_SESSION['username']) and $_SESSION['username']==null){

          header("Location: login.php?message=Must be Login first");
          exit();

    }
?>
