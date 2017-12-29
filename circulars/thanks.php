<?php
 @session_start();
 error_reporting(0);
 $_SESSION['id']=$_POST['id'];
 $_SESSION['section']=$_POST['name'];
 $_SESSION['contact']=$_POST['contact'];
 $_SESSION['privilege']=1;
include("header.php");
include("connect.php");
//header("location:addcircular.php")

 ?>


  <div id="contentTitle">
            <h2>You have Succesfully logged in As a <?php echo $_SESSION['section'];  ?></h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
            <h3>Your Computer IP Address is</h3>
           <h1><p><?php echo get_real_up_address();?></p></h1>
        	<p>&nbsp;</p>
        </div>

</form>
<?php  include("footer.php");  ?>