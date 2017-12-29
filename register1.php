<?php
include("header.php");
include("connect.php");
if($_POST)
{
	

	$sapid=$_POST['sapid'];
	$cpfno=$_POST['cpfno'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$type=$_POST['type'];
	$buildno=$_POST['buildno'];
	$qrtno=$_POST['qrtno'];
	$address=$type."/".$buildno."/".$qrtno;
	
	$Mobile=$_POST['Mobile'];
	$userEmail=$_POST['userEmail'];
	$qry="SELECT * FROM user WHERE quarterno='$address'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if(!$result) {
	
	
	 $qry1="insert into user values('',$sapid,$cpfno,'','$firstName','$lastName','$address','$Mobile','$userEmail','','','','')";

	  mysql_query($qry1);
}
else
{alert('Already registered.');}
}

?>
<?php //echo date('d/m/Y h:i:s'); ?>
<?php if(!isset($_SESSION['section'])) { ?>
<form name="frmRegistration" method="post" action="register.php">
 <div id="content_main">
	<table border="0" width="500" align="center" class="demo-table">
		<tr><td>SAP ID</td>
		<td><input type="text" class="demoInputBox" name="sapid" value="<?php if(isset($_POST['sapid'])) echo $_POST['sapid']; ?>"></td>
		</tr>
		<tr><td>CPF NO</td>
		<td><input type="text" class="demoInputBox" name="cpfno" value="<?php if(isset($_POST['cpfno'])) echo $_POST['cpfno']; ?>"></td>
		</tr>
		<tr><td>First Name</td>
		<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
		</tr>
		<tr><td>Last Name</td>
		<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
		</tr>
		<tr><td>Address</td>
		<td>
		Type<select name="type" id="type" class="">
           	<option class="" value="">Type</option>
			<option class="" value="I">I</option>
			<option class="" value="II">II</option>
			<option class="" value="III">III</option>
			<option class="" value="IV">IV</option>
			<option class="" value="V">V</option>
			
			</select>
			
		Bulid no.
		<input type="text" class="demoInputBox" name="buildno" value="" size="3">
		Qrt no.
		<input type="text" class="demoInputBox" name="qrtno" value="" size="3">
		</td>
		</tr>
		
		<tr><td>Mobile Number</td>
		<td><input type="text" class="demoInputBox" name="Mobile" value=""></td>
		</tr>
		<tr><td>Email</td>
		<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
		</tr>

	</table>
	<div><input type="submit" name="submit" value="Register" class="btnRegister"></div>
	 </div>
</form>
<?php } include("footer.php");  ?>