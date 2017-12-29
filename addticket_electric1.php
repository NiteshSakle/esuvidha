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
$result=mysql_query("SELECT * FROM electric_defect");
if($_POST){
   if(!isset($_SESSION['emp_id'])) {
  $_SESSION['sapid']=$member['sapid'];
 $_SESSION['cpfno']=$member['cpfno'];
 $_SESSION['privilege']=$member['privilege'];
  $_SESSION['firstname']=$member['firstname'];
   $_SESSION['lastname']=$member['lastname'];
    $_SESSION['quarterno']=$member['quarterno']; }


    $emp_id=$_SESSION['emp_id'];
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


    $qry1="insert into electric_ticketmaster values('','$sectionid','$problem','$assign','$createdate','$solvedate','$status','$ipaddress','$priority','$remark','$nameofperson','$ext')";

    mysql_query($qry1);
    $ticketid=mysql_insert_id();
 $qry="insert into electric_ticketremarks values('',$ticketid,'$remark','$createdate','','')";
    mysql_query($qry);

    header('Location:ticketsuccess.php?ticket='.$ticketid);
	 exit;
      
	}
 ?>

<form id="form1" name="form1" method="post" action="addticket_electric.php" onSubmit="return validate1();">
  <div id="content_main">
  <table width="100%" border="1" cellspacing="2" cellpadding="2"> 
    <tr>
       <td>Select problem</td>
       <td> <select name="problem" id="problem" class="" onChange="changeHandler(this);">
           	<option class="" value="">Select Problem</option>			
          	<?php while($row =mysql_fetch_array($result)) { ?>
			<option class="" value="<?php echo $row['defect_id']."#".$row['defect_name']."#".$row['defect_privilege']."#".$row['defect_remark']?>"><?php echo $row['defect_name']?></option>
			<?php } ?>
			</select>
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
             <!--input type="hidden" name="id" id="id"-->
              <input type="hidden" name="contact" id="contact">
              <input type="hidden" name="privilege" id="privilege">
			   
     <!--tr>
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
        <tr-->
       <td>&nbsp;</td>
       <td><input type="submit" name="submit" id="submit" value="submit"  /> </td>
    </tr>
          </table>
  </div>
</form>
<?php  include("footer.php");  ?>

