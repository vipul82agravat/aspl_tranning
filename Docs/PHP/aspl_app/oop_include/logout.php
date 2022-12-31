<?php
     session_start();
     if(isset($_SESSION['username']) and $_SESSION['username']!=null){
          session_destroy();
          header("Location: login.php");
          exit();

    }
?>
