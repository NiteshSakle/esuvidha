<?php
include("header.php");
include("connect.php");
 function deptName($deptid){
 $query="select  name  from section where id='$deptid'";
 $rw=mysql_query($query);
 if($row=mysql_fetch_object($rw))
 return $row->name;
 }
if($_SESSION['privilege']==2)
$result=mysql_query("SELECT * FROM ticketmaster where sectionid=".$_SESSION['id']);
else
$result=mysql_query("SELECT * FROM ticketmaster");
?>
<?php if(isset($_SESSION['section'])) { ?>
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
	color: black;
}


td.alt {
	background: #F5FAFA;
	color: black;
}

</style>
 <div id="content_main">
  <table width="100%" border="1" cellspacing="2" cellpadding="2">
    <tr>
       <th>Ticket ID</th>
       <th>Section</th>
       <th>problem</th>
       <th>Create date</th>
       <th>status</th>
       <th>priority</th>
     </tr>
    	<?php while($row =mysql_fetch_array($result)) { ?>
    <tr>

       <td><a href="view.php?ticketid=<?php echo $row['ticketid']?>"><?php echo $row['ticketid'] ; ?></a></td>
       <td><?php echo deptName($row['sectionid']); ?></td>
       <td><a href="view.php?ticketid=<?php echo $row['ticketid']?>"><?php echo $row['problem'] ; ?></a></td>
       <td><?php echo $row['createdate'] ; ?></td>
       <td><?php if($row['status']==1) echo "Open";else echo "Closed"  ; ?></td>
       <td><?php if($row['priority']==1){ echo "High"; } elseif($row['priority']==2) { echo "Medium";}else {echo "Low";}?></td>

    </tr>        	<?php } ?>
     </table>
  </div>
   <?php } else { ?>
          <div id="content_main">
            <h2>Please Log on with Your Section</h2>
          </div>

<?php } include("footer.php");  ?>