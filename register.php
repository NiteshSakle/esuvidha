<script type="text/javascript"> 
    function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var addr = document.getElementById("address");
        addr.style.display = chkYes.checked ? "" : "none";
    } 
</script>
<?php
include("header.php");
include("connect.php");
if ($_POST) {
    $address = "";
    $sapid = $_POST['sapid'];
    $cpfno = $_POST['cpfno'];
    $password = $_POST['sapid'];
    $firstName = $_POST['firstName'];
    $qrtAlloted = $_POST['chkqrt'];
    if($qrtAlloted == 'yes') {
        $type = $_POST['type'];
        $buildno = $_POST['buildno'];
        $qrtno = $_POST['qrtno'];
        $address = $type . "-" . $buildno . "/" . $qrtno;        
        $qry2 = "SELECT * FROM user WHERE quarterno='$address'";
        $res = mysql_query($qry2); 
        $result2 = mysql_fetch_array($res);
    }
    $Mobile = $_POST['Mobile'];
    $userEmail = $_POST['userEmail'];
    
    $checkusr_qry = "SELECT * FROM user WHERE sapid='$sapid' or cpfno='$cpfno'";
    $checkusr = mysql_query($checkusr_qry);
    $checkusr_res = mysql_fetch_array($checkusr);
    
    if ($sapid !== '' and $cpfno !== '' and $password !== '' and $firstName !== '' and (($qrtAlloted == 'yes' and $type !== '' and $buildno !== '' and $qrtno !== '')or $qrtAlloted == 'no')) {
        
        if ($checkusr_res != true and $result2 != true) {
            $qry1 = "insert into user values('',$sapid,$cpfno,'','$firstName','','$address','$Mobile','$userEmail','$password','','','')";
            mysql_query($qry1);
            echo "<script>
                    alert('Information saved successfully..!!');
                    window.location.href='index.php';
                    </script>";
            exit();

        } else {
            if ($checkusr_res == true and $result2 != true) {
                $updateQry = "UPDATE `user` SET `quarterno`= '$address', 'mobileno' = '$Mobile' WHERE sapid='$sapid' and cpfno='$cpfno'";
                mysql_query($updateQry);
                echo "<script>
                    alert('Information Updated Successfully..!!');
                    window.location.href='index.php';
                    </script>";
                exit();
            } else {
                $message = "Quarter already registered!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }            
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
<!--                <tr><td>Password</td>
                    <td><input type="password" class="demoInputBox" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"></td>
                </tr>-->
                <tr><td>Full Name</td>
                    <td><input type="text" class="demoInputBox" name="firstName" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
                </tr>
               <tr>
                   <td>Is quarter alloted?</td>
                   <td>
                        <label for="chkYes">
                            <input type="radio" id="chkYes" name="chkqrt" value="yes" onclick="ShowHideDiv()" required=""/>
                            Yes
                        </label>
                        <label for="chkNo">
                            <input type="radio" id="chkNo" name="chkqrt" value="no" onclick="ShowHideDiv()" required=""/>
                            No
                        </label>
                   </td>
                </tr>
                <tr id="address" style="display: none">
                    <td>Address</td>
                    <td>
                        Type: <select name="type" id="type" class="" style="margin-left: 9%">
                            <option class="" value="">Type</option>
                            <option class="" value="A">A</option>
                            <option class="" value="B">B</option>
                            <option class="" value="C">C</option>
                            <option class="" value="D">D</option>
                            <option class="" value="E">E</option>

                        </select>
                        <br/>
                        Bulid no:
                        <input type="text" id="buildno_txt" class="demoInputBox" name="buildno" value="" size=2" style="width: 74%; margin: 10px">
                        <br/>
                        Qrt no:  &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="qrtno_txt" class="demoInputBox" name="qrtno" value="" size="3" style="width: 74%">
                    </td>
                </tr>

                <tr><td>Mobile Number</td>
                    <td><input type="text" class="demoInputBox" name="Mobile" value="<?php if (isset($_POST['Mobile'])) echo $_POST['Mobile']; ?>" pattern="[789][0-9]{9}" title="Not a valid number"></td>
                </tr>
                <tr><td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if (isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not a valid email"></td>
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