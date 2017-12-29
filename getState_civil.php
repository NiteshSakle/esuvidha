<?php
//$link = mysql_connect("localhost","root","");
//$dbSelected = mysql_select_db('drafts2');
include("connect.php");
$id="-1,";
$sname="Please Select Subdefect,";
$cid = $_GET['cid'];

if($cid=="-1")
{
$response = $id."|".$sname;
echo $response;

}
else
{

$result = mysql_query("SELECT * FROM `civil_subdefect` WHERE `defect_id` = '$cid' ");

while($row = mysql_fetch_assoc($result))
{
$id .=$row['subdefect_id'].","; 
$sname .=$row['subdefect_name'].","; 
}
$response = $sname."|".$sname;
echo $response;
}

?>