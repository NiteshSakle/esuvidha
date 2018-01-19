<?php

    session_start();
    session_destroy();
    unset($_SESSION['sapid']);
    unset($_SESSION['cpfno']);
    unset($_SESSION['privilege']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['quarterno']);
    unset($_SESSION['area']);
    unset($_SESSION['mobileno']);
    header("location:index.php");
    ?>