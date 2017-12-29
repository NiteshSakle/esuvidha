<?php
include("connect.php");
$result=mysql_query("SELECT * FROM section");
?>

        <?php include "header.php"; ?>
        
        <!--Body Start here -->
		<?php if(!isset($_SESSION['section'])) { ?>
           <form id="form1" name="form1" method="post" action="thanks.php" onSubmit="return validate();">
           <div id="contentText">
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
           <div id="contentText">
            <li class="menuitem"><a href="addcircularimage.php">Upload Image</a></li>
                <li class="menuitem"><a href="addcircular.php">Add Circular Content</a></li>
                
        </div>
         <?php } ?>
</form>
		
		<!--Body End Here -->
</div>
    <div id="footer">Koradi TPS
	</div>
</body>
</html>
