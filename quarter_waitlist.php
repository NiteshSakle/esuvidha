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

<h2 style="text-align: center"> <u>MAHAGENCO EMPLOYEE QUARTER APPLICATION </u></h2>

<?php
    $i = 1;
    $query = "SELECT `firstname`,`desig_id`,`created_at`, e.isactive, e.id FROM `employee_quarter` AS e INNER JOIN user AS u ON u.emp_id=e.empid ";
    if($_GET['id'] == 1) {
        $query.= " WHERE e.`isactive` = 1" ;    
    } else if($_GET['id'] == 2) {
        $query.= " WHERE e.`isactive` = 0" ;    
    } else{
        $query.= " WHERE 1 " ;    
    } 
    $query.= " ORDER BY e.`isactive` desc";
    $result = mysql_query($query);
    $total = mysql_num_rows($result);
?>

<table border="2" style="margin: auto">
    <tr>
        <td colspan="2"> <?php echo "Total Application: ". $total ?></td>
        <td><a href="quarter_waitlist.php?id=1">View Unallocated</a></td>
        <td><a href="quarter_waitlist.php?id=2">View Allocated</a></td>
        <td><a href="quarter_waitlist.php">View all</a></td>
    </tr>
    <tr>
        <th> Ticket No </th>
        <th> Name of Person </th>
        <th> Designation </th>
        <th> Status </th>
        <th> Application date </th>
    </tr>
    <?php while ($row = mysql_fetch_array($result)) { ?>
        <tr>
            <td><a target="_blank" href="quarter_view.php?ticketid=<?php echo $row['id'] ?>"><?php echo $row['id'];?></a></td>
            <td><?php echo $row['firstname']; ?></td>
            <td> <?php echo $row['desig_id'];?> </td>
            <td><?php $x = $row['isactive'] ? ' Not Allocated' : 'Allocated';
                echo $x ?>
            </td>        
            <td><?php echo $row['created_at'] ?></td>
        </tr>        
    <?php } ?>
</table>
    