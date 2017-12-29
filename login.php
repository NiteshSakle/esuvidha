<?php
include("header.php");
include("connect.php");
$result=mysql_query("SELECT * FROM section ORDER BY name ASC");
?>

<?php  IF ($_GET['id']==1){
			$message = "user name and password not found!!";
echo "<script type='text/javascript'>alert('$message');</script>";

}
	?>
<?php if(!isset($_SESSION['section'])) { 
$id=$_GET['id2'];

?>
<div class="form">
    <form id="form1" class="login-form" name="form1" method="post" action="login_exec.php" onSubmit="return validate();" >
          <input type="text" name="sapid" id="sapid"  maxlength="08"  placeholder="SAP ID (Don't prefix zeros)" />
          <input type="password" name="password" id="password" placeholder="PASSWORD" />
          <input type="hidden" name="area" id="area" value=<?php echo $id;?> />       
          <input type="submit" name="submit" id="submit"  class="submitbutton" value="Login"  />
          <p class="message"><a href="forget.php">Forget Password</a></p>

         <?php  } else { ?>
               <div id="content_main">
                <h2>You have Succesfully logged in As a <?php echo $_SESSION['section'];  ?></h2>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                <h3>Your Computer IP Address is</h3>
               <h1><p><?php echo get_real_up_address();?></p></h1>
                    <p>&nbsp;</p>
            </div>
             <?php } ?>
    </form>
</div>
<?php  include("footer.php");  ?>