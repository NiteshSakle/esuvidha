<?php
session_start();
$con = mysql_connect("koraditps.co.in","koraditp_ticket","ticket123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("koraditp_ticket", $con);

?>