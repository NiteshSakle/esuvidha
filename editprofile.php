<?php
include("header.php");
include("connect.php");
?>
<?php
    if(!isset($_SESSION['sapid'])) {
        header("location:index.php");
    }
    if (isset($_SESSION['sapid'])) { ?>
 
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
    <SCRIPT LANGUAGE="JavaScript" src="js/script.js"></SCRIPT>
    
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
            } else if (document.frmRegistration.section.value == "") {
                alert("Please Enter Section..!!");
                document.frmRegistration.section.focus();
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
                <tr><td>Full Name</td>
                    <td><?PHP echo $_SESSION['firstname']; ?></td>
                </tr>

                <?php if ($_SESSION['quarterno'] == "") { ?>
                    <tr>
                        <td>Address</td>
                        <td>
                            Type: <select name="type" id="type" class="" style="margin-left: 9%">
                                    <option class="" value="">Type</option>
                                    <option class="" value="A">A</option>
                                    <option class="" value="B">B</option>
                                    <option class="" value="C">C</option>
                                    <option class="" value="D">D</option>
                                    <option class="" value="E">E</option>
                                    <option class="" value="F">F</option>
                                </select>
                            <br/>
                            Bulid no:
                            <input type="text" id="buildno_txt" class="demoInputBox" name="buildno" value="" size=2" style="width: 74%; margin: 10px">
                            <br/>
                            Qrt no:  &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="qrtno_txt" class="demoInputBox" name="quarterno" value="" size="3" style="width: 74%">
                        </td>
                    </tr>
                <?php } else{ ?>
                    <tr><td>Quarter No </td>
                    <td>
                        <input type="text" class="demoInputBox" name="quarterno" id="quarterno" value="<?php echo $_SESSION['quarterno']; ?>" disabled>
                    </td>
                </tr>	
                <?php } ?>
                <tr><td>Mobile Number</td>
                    <td><input type="text" class="demoInputBox" name="Mobile" id="Mobile" value="<?php echo $_SESSION['mobileno']; ?>"  pattern="[789][0-9]{9}" title="Not a valid number"></td>
                </tr>
                <tr><td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" id="userEmail" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not a valid email"></td>
                </tr>
                <tr><td>Section</td>
                    <td>
                        <input type="text" id="keyword" tabindex="0" class="demoInputBox" name="section" autocomplete="off" value="<?php if (isset($_SESSION['section'])) echo $_SESSION['section']; ?>">
                        <!--<input type="text" class="demoInputBox" name="section" id="section" value="<?php if (isset($_SESSION['section'])) echo $_SESSION['section']; ?>" ></td>-->
                        <div id="ajax_response"></div>
                </tr>                
                <td colspan="2">
                    <input type="submit" name="submit" id="submit"  class="submitbutton" value="Save Details" style="width: 50%"  />
                </td> 
            </table>
        </div>
    </form>
<?php } include("footer.php"); ?>