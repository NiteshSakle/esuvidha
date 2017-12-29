<script type="text/javascript">
function changeHandler(target){
        var val=target.value;
        if(val=='Other')
      document.getElementById('other').hidden = false;
        
}
</script>


<script>
    function edValueKeyPress()
    {
	    var edValue = document.getElementById("name");
        edValue.value="";

    }
</script> 
<script>
var xmlhttp;
function ajaxFunction(url,myReadyStateFunc)
{
   if (window.XMLHttpRequest)
   {
      // For IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
   }
   else
   {
      // For IE5, IE6
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange= myReadyStateFunc;        // myReadyStateFunc = function
   xmlhttp.open("GET",url,true);
   xmlhttp.send();
}

function getState(x)
{
//alert(x);
    // in second argument of ajaxFunction we are passing whole function (onreadystatechange function).
    // Goto getState.php code
    ajaxFunction('getState_civil.php?cid='+x, function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
		//alert("vishal"+xmlhttp.responseText);

var s = xmlhttp.responseText;    //   s = "1,2,3,|state1,state2,state3,"
s=s.split("|");                              //   s = ["1,2,3,", "state1,state2,state3,"]
sid = s[0].split(",");                    //  sid = [1,2,3,]
sval = s[1].split(",");                   //  sval = [state1, state2, state3,]
st = document.getElementById('remark')
st.length=0
for(i=0;i<sid.length-1;i++)
{
st[i] = new Option(sval[i],sid[i])
}
getCity(-1) // emptying the city.
        }
    });
}
function getCity(x)
{
    // in second argument of ajaxFunction we are passing whole function.
   // Goto getCity.php code
   ajaxFunction("getCity.php?sid="+x, function()
   {
       if (xmlhttp.readyState==4 && xmlhttp.status==200)
       {
var c = xmlhttp.responseText;
c=c.split("|");
cid = c[0].split(",");
cval = c[1].split(",");
ct = document.getElementById('city')
ct.length=0
for(i=0;i<cid.length-1;i++)
{
ct[i] = new Option(cval[i],cid[i])
}
        }
    });
}


</script>


<?php
include("header.php");
include("connect.php");
$result=mysql_query("SELECT * FROM user");
if($_POST){
   if(!isset($_SESSION['emp_id'])) {
  $_SESSION['sapid']=$member['sapid'];
 $_SESSION['cpfno']=$member['cpfno'];
 $_SESSION['privilege']=$member['privilege'];
  $_SESSION['firstname']=$member['firstname'];
   $_SESSION['lastname']=$member['lastname'];
    $_SESSION['quarterno']=$member['quarterno'];
	 }


    $emp_id=$_SESSION['emp_id'];
    $problem=$_POST['problem'];
$other=$_POST['other'];
    $assign=$_SESSION['quarterno'];
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


    $qry1="insert into civil_ticketmaster values('','$emp_id','$problem','$assign','$createdate','$solvedate','$status','$ipaddress','$priority','$remark','$nameofperson','$ext')";

    mysql_query($qry1);
    $ticketid=mysql_insert_id();
 $qry="insert into civil_ticketremarks values('',$ticketid,'$remark','$createdate','','')";
    mysql_query($qry);
 
    header('Location:ticketsuccess.php?ticket='.$ticketid);
     exit; 
	}
 ?>

<form id="form1" name="form1" method="post" action="addticket_civil.php" onSubmit="return validate1();">
  <div id="content_main">
  <table width="100%" border="1" cellspacing="2" cellpadding="2">
  
  
  




<!--tr>
<h3>Select SubSection
:&nbsp;<select name="city" id="city"  >
<option value="-1">Please Select SubSection</option>            
</select>
<!--<input type="submit" value="submit">
</h3>
</tr>-->
  
  
  
  
    <tr>

	
       <td>Select problem</td>
       <td> <!--select name="problem" id="problem" class="" onChange="changeHandler(this);">
           	<option class="" value="">Select Problem</option>
			<option class="" value="Carpainter_Problem">Carpainter_Problem</option>
            <option class="" value="Repair_Problem">Repair_Problem</option>
            <option class="" value="Water_Problem">Water_Problem</option>
            <option class="" value="Tree_Problem">Tree_Problem</option>
            


 <option class="" value="Other">Other</option>


						</select>
<input type="text" name="other" id="other" hidden maxlength="20"-->

	  <h3><select name="problem" id="problem" onchange="getState(this.value)">
<option value="-1">Please Select Office</option>
<?php
$cntry = mysql_query("SELECT `defect_Id`, `defect_name` FROM civil_defect ORDER BY `defect_id` ASC");
while($row = mysql_fetch_assoc($cntry))
{
echo '<option value="'.$row['defect_Id'].'">'.$row['defect_name'].'</option>';
}
?>
</select>
</h3>

       </td>
    </tr>


    <tr>
       <td>Remark</td>
       <td><!--textarea name="remark" rows="9" cols="55"></textarea--> 
<h3><select name="remark" id="remark" onchange="getCity(this.value)">
<option value="-1">Please Select Section</option>
</select>
</h3>
	   </td>
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

