<?php

//Start session
session_start();
include("header.php");
include("connect.php");

$errmsg_arr = array();
$errflag = false;

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}

//Sanitize the POST values
$username = clean($_POST['sapid']);
$password = clean($_POST['password']);

//Input Validations
if ($username == '') {
    $errmsg_arr[] = 'Username missing';
    $errflag = true;
}
if ($password == '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}

//If there are input validations, redirect back to the login form
if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: index.php");
    exit();
}

//Create query
$qry = "SELECT * FROM user WHERE sapid='$username' AND password='$password'";
$result = mysql_query($qry);

//Check whether the query was successful or not
if ($result) {
    if (mysql_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $member = mysql_fetch_assoc($result);
        $_SESSION['emp_id'] = $member['emp_id'];
        $_SESSION['sapid'] = $member['sapid'];
        $_SESSION['cpfno'] = $member['cpfno'];
        $_SESSION['privilege'] = $member['privilege'];
        $_SESSION['firstname'] = $member['firstname'];
        $_SESSION['lastname'] = $member['lastname'];
        $_SESSION['quarterno'] = $member['quarterno'];
        $_SESSION['mobileno'] = $member['mobileno'];
        $_SESSION['email'] = $member['email'];
        $_SESSION['section'] = $member['section'];


        session_write_close();
        if ($member['mobileno'] == '' or $_SESSION['quarterno'] == '') {
            header("location: editprofile.php");
        } else {
            header("location: login.php");
        }
        exit();                    

    }else {
        //Login failed
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();

            header("location:index.php?id=1");
            exit();
        }
    }
} else {
    die("Query failed");
}
?>