 <?php
include("header.php");
include("connect.php");
 function deptName($deptid){
 $query="select  name  from section where id='$deptid'";
 $rw=mysql_query($query);
 if($row=mysql_fetch_object($rw))
 return $row->name;
 }
 function contact($deptid){
 $query="select  contact 	  from section where id='$deptid'";
 $rw=mysql_query($query);
 if($row=mysql_fetch_object($rw))
 return $row->contact;
 }

//echo "SELECT * FROM ticketremarks where ticketid=".$_GET['ticketid'];
$remarklist=mysql_query("SELECT * FROM ticketremarks where ticketid=".$_GET['ticketid']);
$result=mysql_query("SELECT * FROM ticketmaster where ticketid=".$_GET['ticketid']);
if($row =mysql_fetch_array($result)){
    $sectionid=$row['sectionid'];
    $problem=$row['problem'];
    $assign='';
    $createdate=$row['createdate'];
    $solvedate=$row['solvedate'];
    $status=$row['status'];
    $ipaddress=$row['ipaddress'];
    $priority=$row['priority'];
    $remark=$row['remark'];
}
if($_POST)
{
    $ipaddress=get_real_up_address();
    $id=$_POST['id'];
    $remark=$_POST['remark'];
    $remakdate=date('Y-m-d h:i:s');
    $remarkby=$_SESSION['section'];
    $status= $_POST['status'];
    if($status!='')
    {
         mysql_query("UPDATE ticketmaster SET status=$status WHERE ticketid=$id");
    }
    if($_SESSION['privilege']==2 and $status==2 and $remark!='')
    {
      mysql_query("UPDATE ticketmaster SET status=1 WHERE ticketid=$id");
    }
    if($remark!=''){
    $qry="insert into ticketremarks values('',$id,'$remark','$remakdate','$remarkby')";
    mysql_query($qry);}
     header('Location:view.php?ticketid='.$_POST['id']);
     exit;
}
 ?>
 <style>
table { margin: 1em; border-collapse: collapse; }
td, th { padding: .3em; border: 1px #ccc solid; }
thead { background: #fc9; }
</style>
<style type="text/css">
th {
	font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;

	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
}

th.nobg {
	border-top: 0;
	border-left: 0;
	border-right: 1px solid #C1DAD7;
	background: none;
}th.spec {
	border-left: 1px solid #C1DAD7;
	border-top: 0;
	background: #fff url(images/bullet1.gif) no-repeat;
	font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
}

th.specalt {
	border-left: 1px solid #C1DAD7;
	border-top: 0;
	background: #f5fafa url(images/bullet2.gif) no-repeat;
	font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: black;
}td {
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	background: #fff;
	padding: 6px 6px 6px 12px;
    	font: bold 13px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: black;
}


td.alt {
	background: #F5FAFA;
	color: black;
}

</style>

 <div id="content_main">
    <table width="90%" cellpadding="1" cellspacing="0" border="0">
     <tr>
       <th colspan=2 width=100% class="msg">Ticket No #<?php echo $_GET['ticketid']; ?>
        </th>
     </tr>
    <tr>
       <td width=60%>
        <table align="center" class="" cellspacing="1" cellpadding="3" width="95%" border=0>
	        <tr>
				<th>Status:</th>
				<td><?php if($status==1) echo "Open"; else echo "Closed" ; ?></td>
			</tr>
            <tr>
                <th>IP Address:</th>
                <td><?php echo $ipaddress; ?></td>
            </tr>
			<tr>
                <th>Create Date:</th>
                <td><?php echo $createdate; ?></td>
            </tr>
		</table>
	   </td>
	   <td width=40% valign="middle" align="center">
        <table align="center" class="infotable" cellspacing="1" cellpadding="3" width="90%" border=0>
                   <tr>
                <th width="100">Dept Name:</th>
                <td><?php echo deptName($sectionid); ?></td>
            </tr>

            <tr>
                <th>Phone:</th>
                <td><?php echo contact($sectionid); ?></td>
            </tr>
        </table>
       </td>
    </tr>
</table>
<div class="msg"><h2>Subject: <?php echo $problem; ?></h2></div>
<br>
<div align=""><span class="Icon thread">Ticket Remarks</span>
    <div id="" align="">
        		   <table width="90%" cellpadding="1" cellspacing="0" border="0">
  		             <tr class="">
                          <td><p><?php echo $remark; ?></p></td>
                     </tr>
                     	<?php while($rmk =mysql_fetch_array($remarklist)) { ?>
                      <tr>
                        <th></th>
                     </tr>
                     <tr class="">
                          <td align =""><p><?php echo $rmk['remark']; ?></p><h4>Remark by: <?php echo $rmk['remarkby']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rmk['remakdate'];  ?></h4></td>
                     </tr>
			            <?php } ?>
                   </table>
                </div>
</div>
<!--form id="reply" name="reply" method="post" action="view.php" onSubmit="return validate2();"-->
<form id="reply" name="reply" method="post" action="view.php">
    <div id="reply" style="padding:10px 0 20px 40px;">
                <input type="hidden" name="id" value="<?php echo $_GET['ticketid']; ?>">
                <input type="hidden" name="status" value="<?php echo $status; ?>">
            <div align="left">
                Enter Message <font class="error">&nbsp;</font><br/>
                <textarea name="remark" id="remark" cols="60" rows="7" wrap="soft"></textarea>
            </div>
            <?php if($_SESSION['privilege']==1){ ?>
          <div align="left">
                Change Status <font class="error">&nbsp;</font><br/>
                <select name="status" id="status" class="">
    			<option class="" value="1" <?php if($status==1) echo 'selected';?>>Open</option>
            	<option class="" value="2" <?php if($status==2) echo 'selected';?>>Close</option>
    			</select>
            </div>      <?php } ?>
           <div align="left"  style="padding:10px 0 10px 0;">
               <input type="submit" name="submit" id="submit" value="Post Reply"  />
                          <input class='button' type='button' value='Cancel' onClick="window.location.href='list.php'" />
            </div> </div>
        </form>
</div>
<?php  include("footer.php");  ?>
