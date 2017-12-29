<script type="text/javascript">
function changeHandler(target){
        var val=target.value;
        if(val=='Other')
      document.getElementById('other').hidden = false;
        
}
</script>
<?php
include("header.php");
include("connect.php");
$result=mysql_query("SELECT * FROM section");
if($_POST){
   if(!isset($_SESSION['id'])) {
 $_SESSION['id']=$_POST['id'];
 $_SESSION['section']=$_POST['name'];
 $_SESSION['contact']=$_POST['contact'];
 $_SESSION['privilege']=$_POST['privilege']; }


    $sectionid=$_SESSION['id'];
    $problem=$_POST['problem'];
$other=$_POST['other'];
    $assign='';
    $createdate=date('Y-m-d h:i:s');
    $solvedate='';
    $status=1;
    $ipaddress=get_real_up_address();
    $priority=$_POST['group1'];
    $remark=$_POST['remark'];
 $nameofperson=$_POST['nameofperson'];
 $ext=$_POST['ext'];

     $remarkby=$_SESSION['section'];
if($problem=="Other"){

$problem=$_POST['other'];
if($problem=="")
$problem=$_POST['problem'];

}


     $qry1="insert into ticketmaster values('',$sectionid,'$problem','$assign','$createdate','$solvedate','$status','$ipaddress','$priority','$remark','$nameofperson','$ext')";

    mysql_query($qry1);
    $ticketid=mysql_insert_id();
      $qry="insert into ticketremarks values('',$ticketid,'$remark','$createdate','$remarkby')";
    mysql_query($qry);

    header('Location:ticketsuccess.php?ticket='.$ticketid);
       exit;
	}
 ?>

<form id="form1" name="form1" method="post" action="addticket.php" onSubmit="return validate1();">
  <div id="content_main">
  <table width="100%" border="1" cellspacing="2" cellpadding="2">
    <tr>
       <td>Select problem</td>
       <td> 
       <select name="problem" id="problem" class="" onChange="changeHandler(this);">
           	<option class="" value="">Select Problem</option>
	    	<option class="" value="Vodafone_tickets">Vodafone tickets</option>
            <option class="" value="Vodafone_dongle_bills">Vodafone dongle bills</option>
            <option class="" value="Vodafone_mobile_bills">Vodafone mobile bills</option>
            <option class="" value="HO_Ticket_System">HO Ticket System</option>
            <option class="" value="PR_PO_Status">PR-PO Status</option>
            <option class="" value="Imprest_Status">Imprest Status</option>
            <option class="" value="Other">Other</option>
	</select>
<input type="text" name="other" id="other" hidden maxlength="20">
       </td>
    </tr>

    <tr>
       <td>Remark</td>
       <td><textarea name="remark" rows="9" cols="55"></textarea>  </td>
    </tr>
<tr>
       <td>Your Name</td>
       <td><input type="text" name="nameofperson" id="nameofperson"></td>
    </tr>
<tr>
       <td>Contact/Extension</td>
       <td><input type="text" name="ext" id="ext" >  </td>
    </tr>
    <tr>
       <td>Priority</td>
       <td><input type="radio" name="group1" value="1"> High<br>
<input type="radio" name="group1" value="2" checked> Medium<br>
<input type="radio" name="group1" value="3"> Low
 </td>
    </tr>
     <?php if(!isset($_SESSION['section'])) { ?>
     <input type="hidden" name="name" id="name">
             <input type="hidden" name="id" id="id">
              <input type="hidden" name="contact" id="contact">
              <input type="hidden" name="privilege" id="privilege">
     <tr>
       <td>Select Section</td>
       <td> <select name="section" id="section" class="">
           	<option class="" value="">Select Section</option>
			<?php while($row =mysql_fetch_array($result)) { ?>
			<option class="" value="<?php echo $row['id']."#".$row['name']."#".$row['contact']."#".$row['privilege']?>"><?php echo $row['name']?></option>
			<?php } ?>
			</select>
       </td>
    </tr>  <?php } else { ?>
    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
    <?php } ?>
        <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="submit" id="submit" value="submit"  /> </td>
    </tr>
          </table>
  </div>
</form>
<?php  include("footer.php");  ?>

