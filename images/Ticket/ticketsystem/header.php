<?php
session_start();
error_reporting(0);


 function get_real_up_address() {

                      if (isset($_SERVER)) {
                         if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
                              return $_SERVER["HTTP_X_FORWARDED_FOR"];
                         if (isset($_SERVER["HTTP_CLIENT_IP"]))
                              return $_SERVER["HTTP_CLIENT_IP"];
                      return $_SERVER["REMOTE_ADDR"];
                      }
                       if (getenv('HTTP_X_FORWARDED_FOR'))
                         return getenv('HTTP_X_FORWARDED_FOR');
                      if (getenv('HTTP_CLIENT_IP'))
                         return getenv('HTTP_CLIENT_IP');
                      if (getenv('REMOTE_ADDR'))
                         return getenv('REMOTE_ADDR');
                       return 'UNKNOWN';
           }
 ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Koradi TPS-Ticket System</title>
</head>
<script language="javascript" type="text/javascript">
function validate()
{
   	var str;
    str=document.form1.section.value;
   var n=str.split("#");
   var id=n[0];
   var name=n[1];
   var con=n[2];
   var pri=n[3];
     document.form1.name.value=name;
     document.form1.id.value=id;
     document.form1.contact.value=con;
     document.form1.privilege.value=pri;
	if(str=="")
	{
	   alert("Please select section");
	   document.form1.section.focus();
	   return false;
	}
	else
	return true;
}
function validate1()
{
    var problem;
    var section;
    problem=document.form1.problem.value;
    section=document.form1.section.value;
	if(problem=="")
	{
	   alert("Please select problem");
	   document.form1.problem.focus();
	   return false;
	}
    	var str;
    str=document.form1.section.value;
   var n=str.split("#");
   var id=n[0];
   var name=n[1];
   var con=n[2];
   var pri=n[3];
     document.form1.name.value=name;
     document.form1.id.value=id;
     document.form1.contact.value=con;
     document.form1.privilege.value=pri;
    if(section=="")
	{
	   alert("Please select section");
	   document.form1.section.focus();
	   return false;
	}
	else
	return true;
}
function validate2()
{
     var remark;
    remark=document.reply.remark.value;
 	if(remark=="")
	{
	   alert("Please Enter remark");
	   document.reply.remark.focus();
	   return false;
	}
	else
	return true;
}
</script>
<body>
<div id="container">
		<div id="header">
        	<h1>Ticket<span class="off"> System</span></h1>
            <h2>Koradi Thermal Power Station</h2>
        </div>
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Home</a></li>
                <li class="menuitem"><a href="addticket.php">New Ticket</a></li>
                <li class="menuitem"><a href="list.php">My Tickets</a></li>
                <?php if(isset($_SESSION['section'])) { ?><li class="menuitem"><a href="logout.php">Logout(<?php echo $_SESSION['section']; ?>)</a></li><?php }?>
                 <li class="menuitem"><a href="#">Ip Address:- <?php echo get_real_up_address();?></a></li>
            </ul>
        </div>
              <div id="content">
                 <div id="content_top"></div>
                   