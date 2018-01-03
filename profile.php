<?php
include("header.php");
include("connect.php");
if ($_POST) {
    $sapid = $_POST['sapid'];
    $cpfno = $_POST['cpfno'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $type = $_POST['type'];
    $buildno = $_POST['buildno'];
    $quarterno = $_POST['quarterno'];
    $address = $type . "/" . $buildno . "/" . $qrtno;

    $Mobile = $_POST['Mobile'];
    $userEmail = $_POST['userEmail'];
    $qry2 = "SELECT * FROM user WHERE quarterno='$address'";
    $result2 = mysql_query($qry2);
    if ($sapid !== '' and $cpfno !== '' and $password !== '' and $firstName !== '' and $lastName !== '' and $type !== '' and $buildno !== '' and $qrtno !== '') {
        //echo $result2;
        if (mysql_fetch_array($result2) !== true) {
            if ($quarterno != '') {
//$qry1="insert into user values('',$sapid,$cpfno,'','$firstName','$lastName','$address','$Mobile','$userEmail','$password','','','')";
                echo $qry1 = "UPDATE user SET password='$password',quarterno='$quarterno',mobileno='$Mobile',email='$userEmail' WHERE sapid=$_SESSION[sapid]";
            } else {
                //$qry1="insert into user values('',$sapid,$cpfno,'','$firstName','$lastName','$address','$Mobile','$userEmail','$password','','','')";
                echo $qry1 = "UPDATE user SET password='$password',mobileno='$Mobile',email='$userEmail' WHERE sapid=$_SESSION[sapid]";
            }

// $qry1="insert into user values('',$sapid,$cpfno,'','$firstName','$lastName','$address','$Mobile','$userEmail','$password','','','')";
//$qry1="UPDATE user SET password='$password',quarterno='$quarterno',mobileno='$Mobile',email='$userEmail' WHERE sapid=$_SESSION[sapid]";

            mysql_query($qry1);
            $_SESSION['mobileno'] = $Mobile;
            $_SESSION['email'] = $userEmail;
            $_SESSION['quarterno'] = $quarterno;
            
            echo "<script>
                    alert('Your information has been saved..!!');
                    window.location.href='login.php';
                    </script>";
//            header("location:editprofile.php");
        } else {

            $message = "Quarter already registered!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //echo "quarter problem.";
        }
    } else {

        //header('Location:editprofile.php');
    }
}
?>
<?php //echo date('d/m/Y h:i:s');  ?>
<?php if (!isset($_SESSION['section'])) { ?>
    <form name="frmRegistration" method="post" action="register.php">
        <div id="content_main">
            <table border="0" width="500" align="center" class="demo-table">
                <tr><td>SAP ID</td>
                    <td><input type="text" class="demoInputBox" name="sapid" value="<?php if (isset($_POST['sapid'])) echo $_POST['sapid']; ?>"></td>
                </tr>
                <tr><td>CPF NO</td>
                    <td><input type="text" class="demoInputBox" name="cpfno" value="<?php if (isset($_POST['cpfno'])) echo $_POST['cpfno']; ?>"></td>
                </tr>
                <tr><td>Password</td>
                    <td><input type="password" class="demoInputBox" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"></td>
                </tr>
                <tr><td>First Name</td>
                    <td><input type="text" class="demoInputBox" name="firstName" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
                </tr>
                <tr><td>Last Name</td>
                    <td><input type="text" class="demoInputBox" name="lastName" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
                </tr>
                <tr><td>Address</td>
                    <td>
                        Type<select name="type" id="type" class="">
                            <option class="" value="">Type</option>
                            <option class="" value="I">I</option>
                            <option class="" value="II">II</option>
                            <option class="" value="III">III</option>
                            <option class="" value="IV">IV</option>
                            <option class="" value="V">V</option>

                        </select>

                        Bulid no.
                        <input type="text" class="demoInputBox" name="buildno" value="" size="3">
                        Qrt no.
                        <input type="text" class="demoInputBox" name="qrtno" value="" size="3">
                    </td>
                </tr>

                <tr><td>Mobile Number</td>
                    <td><input type="text" class="demoInputBox" name="Mobile" value=""></td>
                </tr>
                <tr><td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if (isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
                </tr>

            </table>
            <div><input type="submit" name="submit" value="Register" class="btnRegister"></div>
        </div>
    </form>
<?php } include("footer.php"); ?>