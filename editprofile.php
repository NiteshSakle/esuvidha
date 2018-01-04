<?php
include("header.php");
include("connect.php");
?>
<?php if (isset($_SESSION['sapid'])) { ?>
    <script language="javascript" type="text/javascript">
        function valid1()
        {
            if (document.frmRegistration.password.value == "") {
                alert("Please Enter Password");
                document.frmRegistration.password.focus();
                return false;
            } else if (document.frmRegistration.quarterno.value == "") {
                alert("Please Enter Quarter Number");
                document.frmRegistration.quarterno.focus();
                return false;
            } else if (document.frmRegistration.Mobile.value == "") {
                alert("Please Enter Mobile Number");
                document.frmRegistration.Mobile.focus();
                return false;
            } else if (document.frmRegistration.Mobile.value.length != 10) {
                alert("Please Enter Valid Mobile Number");
                document.frmRegistration.Mobile.focus();
                return false;
            }  
                return true;
        }
    </script>

    <form name="frmRegistration" method="post" action="profile.php"  onSubmit="return valid1(this.form);">
        <div class="table-form">
            <table border="2px solid #FFFFFF" align="center"  cellspacing="2" cellpadding="10" class="new-table" style="width: 100%">
                <tr><td>SAP ID</td>
                    <td><?PHP echo $_SESSION['sapid']; ?></td>
                </tr>
                <tr><td>CPF NO</td>
                    <td><?PHP echo $_SESSION['cpfno']; ?></td>
                </tr>
                <tr><td>Password</td>
                    <td><input type="password" class="demoInputBox" name="password" id="password" ></td>
                </tr>
                <tr><td>First Name</td>
                    <td><?PHP echo $_SESSION['firstname']; ?></td>
                </tr>

                <tr><td>Quarter No(eg D/125/13)</td>
                    <td>
    <?php if ($_SESSION['quarterno'] == "") { ?> <input type="text" class="demoInputBox" name="quarterno" id="quarterno" value=""><?php } else {
        ?>

         <input type="text" class="demoInputBox" name="quarterno" id="quarterno" value="<?php echo $_SESSION['quarterno']; ?>" disabled>

    <?php } ?>
                    </td>

                </tr>		
                <tr><td>Mobile Number</td>
                    <td><input type="text" class="demoInputBox" name="Mobile" id="Mobile" value="<?php echo $_SESSION['mobileno']; ?>"  pattern="[789][0-9]{9}" title="Not a valid number"></td>
                </tr>
                <tr><td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" id="userEmail" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not a valid email"></td>
                </tr>
                <td colspan="2">
                    <input type="submit" name="submit" id="submit"  class="submitbutton" value="Save Details" style="width: 50%"  />
                </td> 
            </table>
        </div>
    </form>
<?php } include("footer.php"); ?>