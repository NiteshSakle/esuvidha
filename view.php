<?php
include("header.php");
include("connect.php");

function deptName($deptid) {
    $query = "select  name  from section where id='$deptid'";
    $rw = mysql_query($query);
    if ($row = mysql_fetch_object($rw))
        return $row->name;
}

function contact($deptid) {
    $query = "select  contact 	  from section where id='$deptid'";
    $rw = mysql_query($query);
    if ($row = mysql_fetch_object($rw))
        return $row->contact;
}

$area = $_GET['area'];
IF ($area == 'civil') {
    $tableName = "civil_ticketmaster";
    $tableName1 = "civil_ticketremarks";
}
IF ($area == 'electric') {
    $tableName = "electric_ticketmaster";
    $tableName1 = "electric_ticketremarks";
}
//echo "SELECT * FROM ticketremarks where ticketid=".$_GET['ticketid'];
$remarklist = mysql_query("SELECT * FROM $tableName1 where ticketid=" . $_GET['ticketid']);
$result = mysql_query("SELECT * FROM $tableName where ticketid=" . $_GET['ticketid']);
if ($row = mysql_fetch_array($result)) {
    $sectionid = $row['sectionid'];
    $problem = $row['problem'];
    $assign = $row['assign'];
    $createdate = $row['createdate'];
    $solvedate = $row['solvedate'];
    $status = $row['status'];
    $ipaddress = $row['ipaddress'];
    $priority = $row['priority'];
    $remark = $row['remark'];
    $nameofperson = $row['nameofperson'];
    $ext = $row['ext'];
}
if ($_POST) {
    $area = $_POST['area'];
    $ipaddress = get_real_up_address();
    $id = $_POST['id'];
    $remark = $_POST['remark'];
    $remakdate = date('Y-m-d H:i:s');
    $remarkby = $_SESSION['firstname'];
    $status = $_POST['status'];
    $solveddate = date('Y-m-d H:i:s');

    IF ($area == 'civil') {
        $tableName = "civil_ticketmaster";
        $tableName1 = "civil_ticketremarks";        
    }
    IF ($area == 'electric') {
        $tableName = "electric_ticketmaster";
        $tableName1 = "electric_ticketremarks";        
    }
    if ($status != '') {
        $qry1 = "UPDATE $tableName SET status=$status,solvedate='$solveddate' WHERE ticketid=$id";
        mysql_query($qry1);
    }
    
    if ($_SESSION['privilege'] != 1 and $_SESSION['privilege'] != 2 and $status == 2 and $remark != '') {
        $qry2 = "UPDATE $tableName SET status=1,solvedate='$solveddate'  WHERE ticketid=$id";
        mysql_query($qry2);
    }
    if ($remark != '') {
        $qry = "insert into $tableName1 values('',$id,'$remark','$remakdate','$remarkby','$ipaddress')";
        mysql_query($qry);
    }

    $qry5 = "select * from $tableName where ticketid=$id";
    $result5 = mysql_query($qry5);
    while ($row5 = mysql_fetch_assoc($result5)) {
        $nameofperson = $row5['nameofperson'];
        echo $ext = $row5['ext'];
//exit;
    }
    if ($status == 2)
        $status1 = "ATTENDED";if ($status == 3)
        $status1 = "PENDING";if ($status == 4)
        $status1 = "QUARTER LOCKED";

        try {
            // Account details
            $apiKey = urlencode('3sC/BU7S7LI-d14vm2GSfGKeRnbkZuqf3IVzd7GM8L');	
            $msg = "Dear " . $_SESSION['firstname'] . " Thank you for contacting us.Ticket No:" . $ticketid . "  We will get back to you soon!";
            $sender = urlencode('MKHTPS');
            $message = "Dear " . urlencode($nameofperson) . " Your Ticket No:" . $id . "  status is " . urlencode($status1) . " !";

            // Prepare data for POST request
            $data = array('apikey' => $apiKey, 'numbers' => $ext, "sender" => $sender, "message" => $message);
            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);        
        } catch (Exception $ex) {
            
        }

    header('Location:view.php?ticketid=' . $_POST['id'] . '&area=' . $area);
    exit;
}
?>
<style>
    table { margin: 1em; border-collapse: collapse; }
    td, th { padding: .3em; border: 1px #ccc solid; }
    thead { background: #fc9; }
</style>
<style type="text/css">
    th {
        font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
        color: #6D929B;
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        border-top: 1px solid #C1DAD7;
        letter-spacing: 2px;

        text-align: left;
        padding: 6px 6px 6px 12px;
        background: #CAE8EA url(images/bg_header.jpg) no-repeat;
    }

    th.nobg {
        border-top: 0;
        border-left: 0;
        border-right: 1px solid #C1DAD7;
        background: none;
    }th.spec {
        border-left: 1px solid #C1DAD7;
        border-top: 0;
        background: #fff url(images/bullet1.gif) no-repeat;
        font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
    }

    th.specalt {
        border-left: 1px solid #C1DAD7;
        border-top: 0;
        background: #f5fafa url(images/bullet2.gif) no-repeat;
        font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
        color: black;
    }td {
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        background: #fff;
        padding: 6px 6px 6px 12px;
        font: bold 13px "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
        color: black;
    }


    td.alt {
        background: #F5FAFA;
        color: black;
    }

</style>

<div>
    <table width="90%" cellpadding="1" cellspacing="0" border="0">
        .
        <tr>
            <th colspan=2 width=100% class="msg">Ticket No #<?php echo $_GET['ticketid']; ?>
            </th>
        </tr>
        <tr>
            <td width=60%>
                <table align="center" class="" cellspacing="1" cellpadding="3" width="95%" border=0>
                    <tr>
                        <th>Status:</th>
                        <td><?php
                            if ($status == 1)
                                echo "NEW";
                            if ($status == 2)
                                echo "ATTENDED";
                            if ($status == 3)
                                echo "PENDING";
                            if($status == 4)
                                echo "QRT LOCKED";
                            ?></td>
                    </tr>
                    <tr>
                        <th>IP Address:</th>
                        <td><?php echo $ipaddress; ?></td>
                    </tr>
                    <tr>
                        <th>Create Date:</th>
                        <td><?php
                            $date1 = date_create($createdate);
                            echo date_format($date1, 'd/m/y H:i');
//echo $createdate; 
                            ?></td>
                    </tr>
                </table>
            </td>
            <td width=40% valign="middle" align="center">
                <table align="center" class="infotable" cellspacing="1" cellpadding="3" width="90%" border=0>
                    <tr>
                        <th width="100">Qrt No:</th>
                        <td><?php echo $row['assign']; ?></td>
                    </tr>

                    <tr>
                        <th>Registered Mobile No:</th>
                        <td><?php echo $ext; //echo contact($sectionid);    ?></td>
                    </tr>
                    <tr>
                        <th>Contact to:</th>
                        <td><?php echo $nameofperson; //echo contact($sectionid);    ?></td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
    <div class="msg"><h2>Main Defect: <?php echo $problem; ?></h2></div>
    <br>
    <div align=""><span class="Icon thread"></span>
        <h4>Sub Defect: -<?php echo $remark; ?></h4>
        <div id="" align="">
            <table width="90%" cellpadding="1" cellspacing="0" border="0">
                <tr class="">
                    <td><p><?php //echo $remark;   ?></p></td>
                </tr>
<?php while ($rmk = mysql_fetch_array($remarklist)) { ?>
                    <tr>
                        <th></th>
                    </tr>
                    <tr class="">
                        <td align =""><p>

                                <?php
                                $date2 = date_create($rmk['remakdate']);
                                echo $rmk['remark'];
                                ?>

                            </p><h4>Remark by: <?php echo $rmk['remarkby'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . date_format($date2, 'd/m/y H:i') . "&nbsp;&nbsp;&nbsp;" . $rmk['ipaddress']; ?></h4></td>
                    </tr>
<?php } ?>
            </table>
        </div>
    </div>
    <!--form id="reply" name="reply" method="post" action="view.php" onSubmit="return validate2();"-->
    <form id="reply" name="reply" method="post" action="view.php">
        <div id="reply" style="padding:10px 0 20px 40px;">
            <input type="hidden" name="id" value="<?php echo $_GET['ticketid']; ?>">
            <input type="hidden" name="status" value="<?php echo $status; ?>">
            <input type="hidden" name="area" value="<?php echo $_GET['area'] ?>"
                   <div align="left">
                Enter Message <font class="error">&nbsp;</font><br/>
                <textarea name="remark" id="remark" cols="60" rows="7" wrap="soft"></textarea>
            </div>
<?php if ($_SESSION['privilege'] == 2 OR $_SESSION['privilege'] == 1) { ?>
                <div align="left">
                    Change Status <font class="error">&nbsp;</font><br/>
                    <select name="status" id="status" class="">
                        <option class="" value="1" <?php if ($status == 1) echo 'selected'; ?>>New</option>
                        <option class="" value="2" <?php if ($status == 2) echo 'selected'; ?>>Attended</option>
                        <option class="" value="3" <?php if ($status == 3) echo 'selected'; ?>>Pending</option>
                        <option class="" value="4" <?php if ($status == 4) echo 'selected'; ?>>Qrt Locked</option>
                    </select>
                </div>      <?php } ?>
            <div align="left"  style="padding:10px 0 10px 0;">
                <input type="submit" name="submit" id="submit" value="Post Reply"  />
                <input class='button' type='button' value='Cancel' onClick="window.location.href = 'list1.php?area=<?php echo $area ?>'" />
            </div>
    </form>
</div>
