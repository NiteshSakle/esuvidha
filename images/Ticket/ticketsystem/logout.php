<?php
  session_start();
  session_destroy();
  unset($_SESSION['success']);
  unset($_SESSION['privilege']);
        unset($_SESSION['deptid']);
		unset($_SESSION['stageid']);
		
  header("location:index.php");
?>