<?php
include("header.php");
include("connect.php");
$result = mysql_query("SELECT * FROM section ORDER BY name ASC");
?>
<?php
$id = $_GET['id'];
if ($id == 5) {
    $message = "You have successfully registered!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
if ($id == 6) {
    $message = "You have successfully changed the password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<?php
IF ($_GET['id'] == 1) {
    $message = "user name and password not found!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<?php if (!isset($_SESSION['section'])) { ?>

    <form id="form1" name="form1" method="post" action="login_exec.php" onSubmit="return validate();">
        <table width="99%" border="0" cellspacing="0" cellpadding="50" style="margin-top: 5%">
            <tr>
                <td width="33%" style="padding: 0px 180px !important">
                    <a href='login.php?id2=civil' ><img src="images/civil.jpg" ></a>
                </td>
                <td width="33%" >
                    <a href='login.php?id2=electric' ><img src="images/electric.jpg"  ></a> 
                </td>
                <td width="33%">
                    <a href='http://192.168.100.3/MIS_MM/defectList.aspx' ><img src="images/comp.jpg"  ></a> 
                </td>

            </tr>
        </table>

<?php } else { ?>
        <div id="content_main">
            <h2>You have Succesfully logged in As a <?php echo $_SESSION['section']; ?></h2>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h3>Your Computer IP Address is</h3>
            <h1><p><?php echo get_real_up_address(); ?></p></h1>
            <p>&nbsp;</p>
        </div>
<?php } ?>
</form>