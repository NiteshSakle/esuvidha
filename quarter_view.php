<?php
include("header.php");
include("connect.php");
include("shared_functions.php");

$remarklist = mysql_query("SELECT * FROM quarter_ticketremarks where ticketid=" . $_GET['ticketid']);
$result = mysql_query("SELECT * FROM user as u INNER JOIN employee_quarter as e on u.emp_id=e.empid where id=" . $_GET['ticketid']);

if ($row = mysql_fetch_array($result)) {
    $createdate = $row['created_at'];
    $solvedate = $row['updated_at'];
    $status = $row['isactive'];
    $designation = $row['desig_id'];
    $remark = $row['remark'];
    $name = $row['firstname'];
    $ext = $row['ext'];
    $sapid = $row['sapid'];
    $cpfno = $row['cpfno'];
}
if ($_POST) {
    $id = $_POST['id'];
    $remark = $_POST['remark'];
    $remakdate = date('Y-m-d H:i:s');
    $remarkby = $_SESSION['firstname'];
    $status = $_POST['status'];
    $mobileno = $_POST['mobileno'];
    $sapid = $_POST['sapid'];
    
    if ($status != '') {
        $qry1 = "UPDATE `employee_quarter` SET `isactive`= $status WHERE id=$id";
        mysql_query($qry1);
    }

    if ($remark != '') {
        $qry = "INSERT INTO `quarter_ticketremarks`(`ticketid`, `remark`, `remarkby`) VALUES($id,'$remark','$remarkby')";
        mysql_query($qry);
    }

    if ($status == 0) {
        $status1 = "ALLOCATED";
        $quarterno = $_POST['type']. "-". $_POST['buildno']. "/". $_POST['qrtno'];
        $qry1 = "UPDATE `user` SET `quarterno`= '$quarterno' WHERE sapid=$sapid";       
        mysql_query($qry1);
    }
    if ($status == 1)
        $status1 = "NOT ALLOCATED";

    if ($_SESSION['privilege'] == 1) {
        echo "<script>window.close();</script>";
        $msg = "Dear Sir, For Your Quarter Application with Ticket No:" . $id . ",";
        if ($status1 != '') {
            $msg .= " Status Updated To " . $status1;
        }
        if($status == 0) {
            $msg.= " Allocated Quarter Number Is: " . $quarterno; 
        }
        if ($remark != '') {
            $msg .= " Remark " . "'$remark'" . " Has Been Added By " . $remarkby;
        }
        sendMsg($mobileno, $msg);
    }
    header('Location:quarter_view.php?ticketid=' . $_POST['id']);
    exit;
}
?>
<script type="text/javascript">
    function showfield(name){
      if(name=='0')document.getElementById('div1').style.display="block";
      else document.getElementById('div1').style.display="none";
    }

   function hidefield() {
    document.getElementById('div1').style.display='none';
   }
</script>

<style>
    table { margin: 1em; border-collapse: collapse; }
    td, th { padding: .3em; border: 1px #ccc solid; }
    thead { background: #fc9; }
    th {
        font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
        color: black;
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        border-top: 1px solid #C1DAD7;
        letter-spacing: 2px;
        text-align: center;
        padding: 6px 6px 6px 12px;
        background: #CAE8EA url(images/bg_header.jpg) no-repeat;
    }

    th.nobg {
        border-top: 0;
        border-left: 0;
        border-right: 1px solid #C1DAD7;
        background: none;
    }
    th.spec {
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
    }
    td {
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
    .defectSubdefect {
        margin: 20px 17px 0px;
        font-size: 22px;
        color:  lightgreen;
        text-align:  center;
    }
</style>
<div>
    <br>
    <table width="70%" cellpadding="0" cellspacing="0" border="0" style="margin: 20px auto 10px;">        
        <tr>
            <th colspan=2>Ticket No #<?php echo $_GET['ticketid']; ?>  </th>
        </tr>
        <tr>
            <td width=30%>
                <table align="center" class="infotable" cellspacing="1" cellpadding="3" width="90%" border=0>
                    <tr>
                        <td width="100">Name:</td>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <td>Designation:</td>
                        <td><?php echo $designation; //echo contact($sectionid);      ?></td>
                    </tr>
                    <tr>
                        <td>Mobile No:</td>
                        <td><?php echo $row['mobileno']; //echo contact($sectionid);      ?></td>
                    </tr>
                    <tr>
                        <td>Application Date:</td>
                        <td><?php
                            $date1 = date_create($createdate);
                            echo date_format($date1, 'd/m/y H:i');
                            ?></td>
                    </tr>                    
                </table>
            </td>
            <td width=30% valign="middle" align="center">
                <table align="center" class="" cellspacing="1" cellpadding="3" width="95%" border=0>
                    <tr>
                        <td>Status:</td>
                        <td><?php
                            if ($status == 0)
                                echo '<span style="color:green;">ALLOCATED</span>';
                            if ($status == 1)
                                echo '<span style="color:red;">NOT ALLOCATED</span>';
                            ?></td>
                    </tr>
                    <tr>
                        <td>SAP ID:</td>
                        <td><?php echo $sapid; ?></td>
                    </tr>
                    <tr>
                        <td>CPF NO :</td>
                        <td><?php echo $cpfno; ?></td>
                    </tr>                    <tr>
                        <td>ALLOCATED AT:</td>
                        <td><?PHP
                            $date1 = date_create($solvedate);
                            echo date_format($date1, 'd/m/y H:i');
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div>
        <table width="70%" cellpadding="0" cellspacing="0" border="0" style="margin: 20px auto 10px;">
            <tr>
                <th colspan=2>Remarks Added Till Date To This Ticket</th>
            </tr>
<?php while ($rmk = mysql_fetch_array($remarklist)) { ?>
                <tr class="">
                    <td align =""><p>
                            <?php
                            echo $rmk['remark'];
                            ?>
                        </p><h4>Remark by: <?php echo $rmk['remarkby'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . date_format($date2, 'd/m/y H:i') . "&nbsp;&nbsp;&nbsp;"; ?></h4></td>                        
                </tr>
<?php } ?>
        </table>
    </div>
</div>

<form id="reply" name="reply" method="post" action="quarter_view.php">
    <div id="reply" style="margin-left: 15%;">
        <input type="hidden" name="id" value="<?php echo $_GET['ticketid']; ?>">
        <input type="hidden" name="mobileno" value="<?php echo $row['mobileno']; ?>">
        <input type="hidden" name="sapid" value="<?php echo $row['sapid']; ?>">
        <div>
            <br/>
            <b> Enter Remark (Optional)
                <br/>
                <textarea name="remark" id="remark" cols="132" rows="6" wrap="soft"></textarea>
        </div>
        <br/>
        <div>
<?php if ($_SESSION['privilege'] == 2 OR $_SESSION['privilege'] == 1) { ?>
                <span align="left">
                    Change Status <font class="error">&nbsp;</font><br/>
                    <select name="status" id="status"  onchange="showfield(this.options[this.selectedIndex].value)">
                        <option value="0" <?php if ($status == 0) echo 'selected'; ?>>Allocated</option>
                        <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Not allocated</option>
                    </select>
                </span>  
            <br>
                <span id="div1" style="margin-left: 20px;display: none">
                    <br>
                    Type:&nbsp;&nbsp;
                    <select name="type" id="type" required>
                        <option class="" value="">Type</option>
                        <option class="" value="A" <?php if ($_POST['type'] == "A") echo "selected"; ?>>A</option>
                        <option class="" value="B" <?php if ($_POST['type'] == "B") echo "selected"; ?>>B</option>
                        <option class="" value="C" <?php if ($_POST['type'] == "C") echo "selected"; ?>>C</option>
                        <option class="" value="D" <?php if ($_POST['type'] == "D") echo "selected"; ?>>D</option>
                        <option class="" value="E" <?php if ($_POST['type'] == "E") echo "selected"; ?>>E</option>
                        <option class="" value="F" <?php if ($_POST['type'] == "F") echo "selected"; ?>>F</option>
                    </select>
                    Bulid no:
                    <input type="text" id="buildno_txt" class="demoInputBox" name="buildno" value="<?php echo $_POST['buildno'] ?>" size=2" style="width: 5%;" required>
                    Qrt no:  &nbsp;&nbsp;
                    <input type="text" id="qrtno_txt" class="demoInputBox" name="qrtno" value="<?php echo $_POST['qrtno']?>" size="3" style="width: 5%" required>
                </span>
            <br>
<?php } ?>
            <span align="left"  style="padding:10px 0 10px 0;">
                <input type="submit" name="submit" id="submit" value="Post Reply"  />
                <input type='button' value='Cancel' onClick="window.location.href = 'quarter_waitlist.php'" />
            </span>
        </div>
</form>
</div>
