<?php
include("header.php");
include("connect.php");
$cirid=$_GET['cirid'];
?>
       <div id="content_main">
            <h2>You have Succesfully Submittted your circular</h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
            <h3>Your Circular id is <h1><bold><?php echo $cirid; ?></bold></h1></h3>
           	<p>&nbsp;</p>
                    </div>
<?php  include("footer.php");  ?>