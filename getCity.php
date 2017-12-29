<?php
//$link = mysql_connect("localhost","root","");
//$dbSelected = mysql_select_db('drafts2');
include("connect.php");
$id="-1,";
$cname="Please Select letter subject,";
$sid = $_GET['sid'];

if($sid=="-1")
{
$response = $id."|".$cname;
echo $response;
}
else
{
$result = mysql_query("SELECT * FROM `drafts_master` WHERE `drafts_submenu_id` = ".$sid." ORDER BY `drafts_name` ASC");

while($row = mysql_fetch_assoc($result))
{
$id .=$row['DRAFTS_ID'].",";
$cname .=$row['DRAFTS_NAME'].",";
}
$response = $id."|".$cname;
echo $response;
}
?>