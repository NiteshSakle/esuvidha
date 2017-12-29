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
    $qrtno = $_POST['qrtno'];
    $address = $type . "/" . $buildno . "/" . $qrtno;

    $Mobile = $_POST['Mobile'];
    $userEmail = $_POST['userEmail'];
    $qry2 = "SELECT * FROM user WHERE quarterno='$address'";
    $result2 = mysql_query($qry2);
    if ($sapid !== '' and $cpfno !== '' and $password !== '' and $firstName !== '' and $lastName !== '' and $type !== '' and $buildno !== '' and $qrtno !== '') {
        //echo $result2;
        if (mysql_fetch_array($result2) !== true) {

            $qry1 = "insert into user values('',$sapid,$cpfno,'','$firstName','$lastName','$address','$Mobile','$userEmail','$password','','','')";

            mysql_query($qry1);

            header("location: index.php?id=5");
        } else {

            $message = "Quarter already registered!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //echo "quarter problem.";
        }
    } else {
        $message = "Fill all the details!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
<?php //echo date('d/m/Y h:i:s');  ?>
<?php if (!isset($_SESSION['section'])) { ?>
    <form name="frmRegistration" method="post" action="register.php">
        <div class="table-form">
            <table border="2px solid #ffffff" cellspacing="2" cellpadding="10" class="new-table" style="width: 100%" >
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
                        Type <select name="type" id="type" class="">
                            <option class="" value="">Type</option>
                            <option class="" value="I">I</option>
                            <option class="" value="II">II</option>
                            <option class="" value="III">III</option>
                            <option class="" value="IV">IV</option>
                            <option class="" value="V">V</option>

                        </select>
                        <br/>
                        Bulid no:
                        <input type="text" class="demoInputBox" name="buildno" value="" size=2" style="width: 80%; margin: 10px">
                        <br/>
                        Qrt no:  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="demoInputBox" name="qrtno" value="" size="3" style="width: 80%">
                    </td>
                </tr>

                <tr><td>Mobile Number</td>
                    <td><input type="text" class="demoInputBox" name="Mobile" value=""></td>
                </tr>
                <tr><td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if (isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" id="submit"  class="submitbutton" value="Register" style="width: 50%"  />
                    </td>
                </tr>

            </table>
        </div>
    </form>
<?php } include("footer.php"); ?>