 <?php
include("header.php");
include("connect.php");


//this query returns number of calls in 30 days for civil
$query1="SELECT COUNT( * ) as cnt 
FROM civil_ticketmaster
WHERE createdate
BETWEEN CURDATE( ) - INTERVAL 30 
DAY AND CURDATE( )";
$result1=mysql_query($query1);
if($row1 =mysql_fetch_array($result1))
	 $thirtyDaysCount=$row1['cnt'];

 
 //this query returns number of atendended calls in 30 days for civil
$query2="SELECT COUNT( * ) as cnt1 
FROM civil_ticketmaster
WHERE createdate
BETWEEN CURDATE( ) - INTERVAL 30 
DAY AND CURDATE( ) and status=2";
$result2=mysql_query($query2);
if($row2 =mysql_fetch_array($result2))
	 $thirtyDaysCount2=$row2['cnt1'];
 
 
 
  //this query returns number of pending calls in 30 days for civil
$query3="SELECT COUNT( * ) as cnt2 
FROM civil_ticketmaster
WHERE createdate
BETWEEN CURDATE( ) - INTERVAL 30 
DAY AND CURDATE( ) and status IN (1,3,4) ";
$result3=mysql_query($query3);
if($row3 =mysql_fetch_array($result3))
	 $thirtyDaysCount3=$row2['cnt2'];
 
 
 
 
 
 
 
 
 
 $remarklist=mysql_query("SELECT * FROM $tableName1 where ticketid=".$_GET['ticketid']);
$result=mysql_query("SELECT * FROM $tableName where ticketid=".$_GET['ticketid']);
if($row =mysql_fetch_array($result)){
    $sectionid=$row['sectionid'];
    $problem=$row['problem'];
    $assign=$row['assign'];
    $createdate=$row['createdate'];
    $solvedate=$row['solvedate'];
    $status=$row['status'];
    $ipaddress=$row['ipaddress'];
    $priority=$row['priority'];
    $remark=$row['remark'];
$nameofperson=$row['nameofperson'];
$ext=$row['ext'];


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
     .
	 <tr>
       <th colspan=2 width=100% class="msg">Ticket No #<?php echo $_GET['ticketid']; ?>
        </th>
     </tr>
    <tr>
       <td width=60%>
        <table align="center" class="" cellspacing="1" cellpadding="3" width="95%" border=0>
	        <tr>
				<th>Status:</th>
				<td><?php if($status==1) echo "NEW"; if($status==2)echo "ATTENDED" ;if($status==3)echo "PENDING" ;  ?></td>
			</tr>
            <tr>
                <th>IP Address:</th>
                <td><?php echo $ipaddress; ?></td>
            </tr>
			<tr>
                <th>Create Date:</th>
                <td><?php 
				$date1=date_create($createdate);
echo date_format($date1, 'd/m/y H:i');
				//echo $createdate; ?></td>
            </tr>
		</table>
	   </td>
	   <td width=40% valign="middle" align="center">
        <table align="center" class="infotable" cellspacing="1" cellpadding="3" width="90%" border=0>
                   <tr>
                <th width="100">Qrt No:</th>
                <td><?php echo $row['assign']; ?></td>
            </tr>

            <tr>
                <th>Registered Mobile No:</th>
                <td><?php echo $ext;//echo contact($sectionid); ?></td>
            </tr>
<tr>
                <th>Contact to:</th>
                <td><?php echo $nameofperson;//echo contact($sectionid); ?></td>
            </tr>

        </table>
       </td>
    </tr>
</table>
<div class="msg"><h2>Main Defect: <?php echo $problem; ?></h2></div>
<br>
<div align=""><span class="Icon thread"></span>
<h4>Sub Defect: -<?php echo $remark; ?></h4>
    <div id="" align="">
        		   <table width="90%" cellpadding="1" cellspacing="0" border="0">
  		             <tr class="">
                          <td><p><?php //echo $remark; ?></p></td>
                     </tr>
                     	<?php while($rmk =mysql_fetch_array($remarklist)) { ?>
                      <tr>
                        <th></th>
                     </tr>
                     <tr class="">
                          <td align =""><p>
						  
						  <?php 
						 $date2=date_create($rmk['remakdate']); 
						  echo $rmk['remark']; ?>
						  
						  </p><h4>Remark by: <?php echo $rmk['remarkby']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".date_format($date2, 'd/m/y H:i')."&nbsp;&nbsp;&nbsp;".$rmk['ipaddress'];  ?></h4></td>
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

          <div align="left">
                Change Status <font class="error">&nbsp;</font><br/>
                <select name="status" id="status" class="">
    			<option class="" value="1" <?php if($status==1) echo 'selected';?>>New</option>
            	<option class="" value="2" <?php if($status==2) echo 'selected';?>>Attended</option>
				<option class="" value="3" <?php if($status==3) echo 'selected';?>>Pending</option>
				<option class="" value="4" <?php if($status==4) echo 'selected';?>>Qrt Locked</option>
    			</select>
            </div>      <?php } ?>
           <div align="left"  style="padding:10px 0 10px 0;">
               <input type="submit" name="submit" id="submit" value="Post Reply"  />
                          <input class='button' type='button' value='Cancel' onClick="window.location.href='list.php'" />
            </div> </div>
        </form>
</div>
<?php  include("footer.php");  ?>
