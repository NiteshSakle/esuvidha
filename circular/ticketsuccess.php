<?php
include("header.php");
include("connect.php");
$ticketid=$_GET['ticket'];
?>
       <div id="content_main">
            <h2>You have Succesfully Submittted your ticket</h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
            <h3>Your Ticket Number is <h1><bold><?php echo $ticketid; ?></bold></h1></h3>
           	<p>&nbsp;</p>
            <h2>Our represetative will solve your ticket shortly</h2>
        </div>
<?php  include("footer.php");  ?>