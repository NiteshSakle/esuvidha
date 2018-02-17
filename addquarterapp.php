<?php
if ($_POST) {
    include("connect.php");
    include("shared_functions.php");

    $name = $_POST['empname'];
    $sapid = $_POST['sapid'];
    $cpfno = $_POST['cpfno'];
    $designation = $_POST['designation'];
    $qrtAlloted = $_POST['chkqrt'];
    if ($qrtAlloted == 'yes') {
        $type = $_POST['type'];
        $buildno = $_POST['buildno'];
        $qrtno = $_POST['qrtno'];
        $address = $type . "-" . $buildno . "/" . $qrtno;
    }
    $mobileno = $_POST['mobileno'];
    $section = $_POST['section'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $remark = $_POST['remark'];
    if($remark == '') {
        $remark = "Applied on ". date("d/m/Y");         //if user doen't enter remark
    }
    $checkusr_qry = "SELECT * FROM user WHERE sapid='$sapid' and cpfno='$cpfno'";
    $result = mysql_query($checkusr_qry);
    $row = mysql_fetch_array($result);

    if ($result) {
        if (mysql_num_rows($result) > 0) {
            $qry = "INSERT INTO `employee_quarter`(`empid`) VALUES ($row[emp_id])";
        } else {       
            //Not an existing user to Esuvidha then first create
            $qry = "INSERT INTO `user`(`sapid`, `cpfno`, `desig_id`, `firstname`,`mobileno`, `email`, `password`, `Birthdate`, `section`) VALUES ($sapid,$cpfno,'$designation','$name','$mobileno','$email',$sapid,'$dob','$section')";
            mysql_query($qry);
            $last_id = mysql_insert_id();
            $qry = "INSERT INTO `employee_quarter`(`empid`) VALUES ($last_id)";
        }
        mysql_query($qry);
        $ticketid = mysql_insert_id();
        
        //insert into quarter remark
        $qry = "INSERT INTO `quarter_ticketremarks`(`ticketid`, `remark`,  `remarkby`) VALUES ($ticketid,'$remark','$name')";
        mysql_query($qry);        
        
        $msg = "Dear ". $name . ", We have successfully received your application. Your ticket ID is " . $ticketid . " Thank You..!";
        sendMsg($mobileno, $msg);
        
        echo "<script>
            alert('Successfully applied for quarter..!!');
            window.location.href='index.php';
            </script>";
        exit();
    }
}
?>