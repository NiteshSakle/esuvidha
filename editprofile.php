<?php
include("header.php");
include("connect.php");
?>
<?php if (isset($_SESSION['sapid'])) { ?>
    <script language="javascript" type="text/javascript">
        function valid1()
        {
            if (document.frmRegistration.password.value == "") {
                alert("Please enter password");
                document.frmRegistration.password.focus();
                return false;
            } else if (document.frmRegistration.quarterno.value == "") {
                alert("Please enter quarterno");
                document.frmRegistration.quarterno.focus();
                return false;
            } else if (document.frmRegistration.Mobile.value == "") {
                alert("Please enter Mobile");
                document.frmRegistration.Mobile.focus();
                return false;
            } else
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

                <tr><td>Quarter No(eg III/3/3)</td>
                    <td>
    <?php if ($_SESSION['quarterno'] == "") { ?> <input type="text" class="demoInputBox" name="quarterno" id="quarterno" value=""><?php } else {
        ?>

         <input type="text" class="demoInputBox" name="quarterno" id="quarterno" value="<?php echo $_SESSION['quarterno']; ?>" disabled>

    <?php } ?>
                    </td>

                </tr>		
                <tr><td>Mobile Number</td>
                    <td><input type="text" class="demoInputBox" name="Mobile" id="Mobile" value="<?php echo $_SESSION['mobileno']; ?>"></td>
                </tr>
                <tr><td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" id="userEmail" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>"></td>
                </tr>
                <td colspan="2">
                    <input type="submit" name="submit" id="submit"  class="submitbutton" value="Save Details" style="width: 50%"  />
                </td> 
            </table>
        </div>
    </form>
<?php } include("footer.php"); ?>