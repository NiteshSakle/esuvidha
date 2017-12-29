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
</script>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Circulars:Koradi TPS</title>
</head>
<body>
    <div id="page">
<div id="header">
        	<h1>My Circulars »</h1>
            <h2>Koradi Thermal Power Station</h2>
            
      </div>
        <div id="bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="ind.php">New Circular</a></li>
                <li><a href="list1.php">Circulars</a></li>
                <?php if(isset($_SESSION['section'])) { ?><li><a href="logout.php">Logout(<?php echo $_SESSION['section']; ?>)</a></li><?php }?>
                <li><a href="search.php">Search</a></li>   
				<li><?php echo get_real_up_address();?></li>
            </ul>
      </div>