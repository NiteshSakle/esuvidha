<?php
include("connect.php");
include("header.php");
?>

<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 8px;
    color: black;
}

tr {
    background-color: #f2f2f2
}

th {
    background-color: #4CAF50;
    color: white;
    text-align: center
}
</style>

<h2 style="text-align: center"> <u>MAHAGENCO EMPLOYEE QUARTER DETAILS </u></h2>
<div style="margin: auto;width: 70%">
    <form id="form1" name="form1" method="post" action="occupied.php">
            <b>Type: </b> &nbsp;&nbsp;
            <select name="type" id="type" required>
                <option class="" value="">Type</option>
                <option class="" value="A" <?php if ($_POST['type'] == "A") echo "selected"; ?>>A</option>
                <option class="" value="B" <?php if ($_POST['type'] == "B") echo "selected"; ?>>B</option>
                <option class="" value="C" <?php if ($_POST['type'] == "C") echo "selected"; ?>>C</option>
                <option class="" value="D" <?php if ($_POST['type'] == "D") echo "selected"; ?>>D</option>
                <option class="" value="E" <?php if ($_POST['type'] == "E") echo "selected"; ?>>E</option>
                <option class="" value="F" <?php if ($_POST['type'] == "F") echo "selected"; ?>>F</option>
            </select>
            &nbsp;&nbsp; <b>Bulid no (Optional):</b>&nbsp;
            <input type="text" name="buildno" value="<?php echo $_POST['buildno'] ?>" size=2">
            &nbsp;&nbsp;
            <input type="submit" name="submit" value="Get List" />                
    </form>
</div>
<?php
    if($_POST) {
        $i = 1;
        $type = $_POST['type'];
        $buildno = $_POST['buildno'];

        if($buildno != '') {
            $query = "SELECT quarterno as Quarter_Number, firstname as Name, desig_id as Designation FROM `user` WHERE (`quarterno` LIKE '$type-$buildno%' OR `quarterno` LIKE '%, $type-$buildno%') ORDER BY `quarterno`"; 
            $qry = "SELECT SUM(LENGTH(quarterno)-LENGTH(REPLACE(quarterno, '-', ''))) AS depth FROM USER WHERE (`quarterno` LIKE '$type-$buildno%' OR `quarterno` LIKE '%, $type-$buildno%') ORDER BY `quarterno`"; 
        } else {
            $query = "SELECT quarterno as Quarter_Number, firstname as Name, desig_id as Designation FROM `user` WHERE (`quarterno` LIKE '$type%' OR `quarterno` LIKE '%, $type%') ORDER BY `quarterno`";      
            $qry = "SELECT SUM(LENGTH(quarterno)-LENGTH(REPLACE(quarterno, '-', ''))) AS depth FROM `user` WHERE (`quarterno` LIKE '$type%' OR `quarterno` LIKE '%, $type%') ORDER BY `quarterno`"; 
        }

        $result = mysql_query($query);
        $total_quarter = mysql_fetch_array(mysql_query($qry));
        $total_quarter = $total_quarter['depth'];
?>
<div style="width: 70%; margin-left: 80%">
    <form id="form1" name="form1" method="post" action="export.php">
        <input type="hidden" value="<?php echo $query;?>" name="qry"/>
        <input class="button" type="submit" name="export" value="Export List" />
    </form>
</div>

<table border="2" style="margin: auto">
    <tr>
        <td colspan="4"> <?php echo "Total quarters: ". $total_quarter ?></td>
    </tr>
    <tr>
        <th> Sr No </th>
        <th> Quarter Number </th>
        <!--<th> Sap Id </th>-->
        <th> Name of Person </th>
        <th> Designation </th>
    </tr>
    <?php while ($row = mysql_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['Quarter_Number']; ?></td>
            <!--<td> <?php echo $row['sapid'];?> </td>-->
            <td><?php echo $row['Name'] ?></td>        
            <td><?php echo $row['Designation'] ?></td>
        </tr>        
    <?php } ?>
</table>
    
<?php } ?>