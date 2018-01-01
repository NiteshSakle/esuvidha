<?php
include("header.php");
include("connect.php");
$result = mysql_query("SELECT * FROM section ORDER BY name ASC");
?>

<?php
IF ($_GET['id'] == 1) {
    $message = "Invalid login credentials..!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
IF ($_GET['id'] == 6) {
    $message = "You have successfully changed the password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
IF ($_GET['id'] == 5) {
    $message = "You have successfully registered!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<?php
if (!$_SESSION['sapid']) {
    $id = $_GET['id2'];
    ?>
    <div class="form">
        <form id="form1" class="login-form" name="form1" method="post" action="login_exec.php" onSubmit="return validate();" >
            <input type="text" name="sapid" id="sapid"  maxlength="08"  placeholder="SAP ID (Don't prefix zeros)" />
            <input type="password" name="password" id="password" placeholder="PASSWORD" />
            <input type="hidden" name="area" id="area" value=<?php echo $id; ?> />       
            <input type="submit" name="submit" id="submit"  class="submitbutton" value="Login"  />
            <p class="message"><a href="forget.php">Forget Password</a></p>

        <?php } else { 
            header('Location:login.php');
            exit;
        } ?>
    </form>
</div>
<?php include("footer.php"); ?>