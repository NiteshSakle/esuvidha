<?php
include("header.php");
include("connect.php");
$result=mysql_query("SELECT * FROM section");
?>
<?php if(!isset($_SESSION['section'])) { ?>
<form id="form1" name="form1" method="post" action="thanks.php" onSubmit="return validate();">
  <div id="content_main">
           <h1>Please Select Your Section:</h1>
           <select name="section" id="section" class="">
           	<option class="" value="">Select Section</option>
			<?php while($row =mysql_fetch_array($result)) { ?>
			<option class="" value="<?php echo $row['id']."#".$row['name'] ?>"><?php echo $row['name']?></option>
			<?php } ?>
			</select>
            <input type="hidden" name="name" id="name">
             <input type="hidden" name="id" id="id">
              <input type="hidden" name="contact" id="contact">
              <input type="hidden" name="privilege" id="privilege">
            <input type="submit" name="submit" id="submit" value="submit"  />
        </div>
     <?php } else { ?>
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
<?php  include("footer.php");  ?>