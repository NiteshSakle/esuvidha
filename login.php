<?php
include("header.php");
include("connect.php");
$result = mysql_query("SELECT * FROM section ORDER BY name ASC");
?>

<?php
    
    if(!isset($_SESSION['sapid'])) {
        header("location:index.php");
    }

  ?>

    <form id="form1" name="form1" method="post" action="login_exec.php" onSubmit="return validate();">
        
        <table width="100%" border="0" cellspacing="0" cellpadding="50" style="margin: 0 5%">
            <tr>
                <td width="30%">
                    <a href='addticket_civil.php?area=civil' ><img src="images/civil.jpg" ></a>
                </td>
                <td width="30%" >
                    <a href='addticket_electric.php?area=electric' ><img src="images/electric.jpg"  ></a> 
                </td>
                <td width="30%">
                    <a href='http://192.168.100.3/MIS_MM/defectList.aspx' ><img src="images/comp.jpg"></a> 
                </td>
            </tr>
        </table>

<?php  ?>
</form>