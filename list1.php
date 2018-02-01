<?php
include("header.php");
include("connect.php");

if(!isset($_SESSION['sapid'])) {
    header("location:index.php");
    exit();
}

function empName($deptid) {
    $query = "select firstname as name  from user where emp_id='$deptid'";
    $rw = mysql_query($query);
    if ($row1 = mysql_fetch_object($rw))
        return $row1->name;
}

if ($_POST) {
    if (!isset($_SESSION['emp_id'])) {
        $_SESSION['sapid'] = $member['sapid'];
        $_SESSION['cpfno'] = $member['cpfno'];
        $_SESSION['privilege'] = $member['privilege'];
        $_SESSION['firstname'] = $member['firstname'];
        $_SESSION['lastname'] = $member['lastname'];
        $_SESSION['quarterno'] = $member['quarterno'];
        $_SESSION['mobileno'] = $member['mobileno'];
    }

    $defect = $_POST['problem'];
    if($_POST['type'] != ''){
        $type = $_POST['type'];
        $buildno = $_POST['buildno'];
        $qrtno = $_POST['qrtno'];
        $address = $type. "-". $buildno. "/". $qrtno;   
    }
}

if (isset($_SESSION['emp_id'])) {
    ?>     <style>
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


        td.datacellone {
            background-color: #CC9999; color: pink;
        }
        td.datacelltwo {
            background-color: #9999CC; color: green;
        }

        .paginate {
            font-family:Arial, Helvetica, sans-serif;
            padding: 3px;
            margin: 3px;
        }

        .paginate a {
            padding:2px 5px 2px 5px;
            margin:2px;
            border:1px solid #999;
            text-decoration:none !important;
            color: #666;
        }
        .paginate a:hover, .paginate a:active {
            border: 1px solid #999;
            color: #000;
        }
        .paginate span.current {
            margin: 2px;
            padding: 2px 5px 2px 5px;
            border: 1px solid #999;

            font-weight: bold;
            background-color: #999;
            color: #FFF;
        }
        .paginate span.disabled {
            padding:2px 5px 2px 5px;
            margin:2px;
            border:1px solid #eee;
            color:#DDD;
        }

        li{
            padding:4px;
            margin-bottom:3px;
            background-color:#FCC;
            list-style:none;
        }

    </style>

    <?php
    $query = '';
    $query1 = '';
    $stages = 3;
    $targetpage = "list1.php";
    $limit = 50;
    $carea = $_GET['area'];
    $id = $_GET['id'];
    $status = mysql_escape_string($_GET['status']);
    $prob = mysql_escape_string($_GET['problem']);
    
    IF ($carea == 'civil') {
        $tableName = "civil_ticketmaster";
    }
    IF ($carea == 'electric') {
        $tableName = "electric_ticketmaster";
    }
    
    $query .= " SELECT COUNT(*) as num FROM $tableName where 1=1 ";
    $query1 .= " SELECT ticketid, nameofperson as Contact_Name, assign as qrtno, ext as Mobile_Number, problem, remark, createdate, status, emp_id as Name FROM $tableName where 1=1  ";

    $page = mysql_escape_string($_GET['page']);
   
    if ($page) {
        $start = ($page - 1) * $limit;
    } else {
        $start = 0;
    }
    if ($status) {
        $query .= "  and status=$status ";
        $query1 .= "  and status=$status ";
    }
    if ($address) {
        $query .= "  and assign LIKE '%$address%' ";
        $query1 .= "  and assign LIKE '%$address%' ";
    }
    if ($prob && $prob != -1) {
         $query .= "  and problem='$prob' ";
        $query1 .= "  and problem='$prob' ";
    }
    if ($id == 1 && $defect != -1) {
        $query .= "  and problem='$defect' ";
        $query1 .= "  and problem='$defect' ";
    }
    if ($_SESSION['privilege'] == 0) {
        $query .= "  and emp_id=" . $_SESSION['emp_id'];
        $query1 .= "  and emp_id=" . $_SESSION['emp_id'];
    }

    $query1 .= "  ORDER BY status,ticketid desc  LIMIT $start, $limit ";    
    $result = mysql_query($query1);
    
    $total_pages = mysql_fetch_array(mysql_query($query));
    $total_pages = $total_pages[num];
    // Initial page num setup
    if ($page == 0) {
        $page = 1;
    }
    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total_pages / $limit);
    $LastPagem1 = $lastpage - 1;


    $paginate = '';
    if ($lastpage > 1) {
        //$paginate .= "<div class='paginate'>";
        // Previous
        if ($page > 1) {
            $paginate .= "<a href='$targetpage?page=$prev&area=$carea'> previous</a>";
        } else {
            $paginate .= "<span class='disabled'> previous</span>";
        }

        // Pages
        if ($lastpage < 7 + ($stages * 2)) { // Not enough pages to breaking it up
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $page) {
                    $paginate .= "<span class='current'> $counter</span>";
                } else {
                    $paginate .= "<a href='$targetpage?page=$counter&status=$status&area=$carea'> $counter</a>";
                }
            }
        } elseif ($lastpage > 5 + ($stages * 2)) { // Enough pages to hide a few?
            // Beginning only hide later pages
            if ($page < 1 + ($stages * 2)) {
                for ($counter = 1; $counter < 4 + ($stages * 2); $counter++) {
                    if ($counter == $page) {
                        $paginate .= "<span class='current'> $counter</span>";
                    } else {
                        $paginate .= "<a href='$targetpage?page=$counter&status=$status&area=$carea'>$ counter</a>";
                    }
                }
                $paginate .= "...";
                $paginate .= "<a href='$targetpage?page=$LastPagem1&status=$status&area=$carea'> $LastPagem1</a>";
                $paginate .= "<a href='$targetpage?page=$lastpage&status=$status&area=$carea'> $lastpage</a>";
            }
            // Middle hide some front and some back
            elseif ($lastpage - ($stages * 2) > $page && $page > ($stages * 2)) {
                $paginate .= "<a href='$targetpage?page=1&status=$status&area=$carea'> 1</a>";
                $paginate .= "<a href='$targetpage?page=2&status=$status&area=$carea'> 2</a>";
                $paginate .= "...";
                for ($counter = $page - $stages; $counter <= $page + $stages; $counter++) {
                    if ($counter == $page) {
                        $paginate .= "<span class='current'>$counter</span>";
                    } else {
                        $paginate .= "<a href='$targetpage?page=$counter&status=$status&area=$carea'> $counter</a>";
                    }
                }
                $paginate .= "...";
                $paginate .= "<a href='$targetpage?page=$LastPagem1&status=$status&area=$carea'> $LastPagem1</a>";
                $paginate .= "<a href='$targetpage?page=$lastpage&status=$status&area=$carea'> $lastpage</a>";
            }
            // End only hide early pages
            else {
                $paginate .= "<a href='$targetpage?page=1&status=$status&area=$carea'>1</a>";
                $paginate .= "<a href='$targetpage?page=2&status=$status&area=$carea'>2</a>";
                $paginate .= "...";
                for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page) {
                        $paginate .= "<span class='current'> $counter</span>";
                    } else {
                        $paginate .= "<a href='$targetpage?page=$counter&status=$status&area=$carea'> $counter</a>";
                    }
                }
            }
        }

        // Next
        if ($page < $counter - 1) {
            $paginate .= "<a href='$targetpage?page=$next&status=$status&area=$carea'> next</a>";
        } else { 
            $paginate .= "<span class='disabled'> next</span>";
        }

        //	$paginate.= "</div>";
    }
    //condition to check if any filter is aaplied
    if ($total_pages == 0 && !isset($_GET['status']) && $_POST['type'] == '' && $_POST['problem'] == '') {
        echo "<script>
                    alert('Please add defect first..!!');                    
                    </script>";
        if ($_GET['area'] == 'civil') {
            echo "<script> window.location.href='addticket_civil.php?area=civil' </script>";
        } elseif ($_GET['area'] == 'electric') {
            echo "<script> window.location.href='addticket_electric.php?area=electric' </script>";
        }
        exit();
    }
    ?>
    <div>
        <?php if ($_SESSION['privilege'] == 1) { ?>
        <form id="form2" method="post" action="downloadcsv.php">
            <input type="hidden" name="qry" id="qry" value="<?php echo $query1?>" />
            <input type="submit" name="submit" id="submit" value="Export Defects" class="export-btn"  />             
        </form>
        
        <?php } ?>
                        <form id="form1" name="form1" method="post" action="list1.php?id=1&area=<?php echo $_GET['area']; ?>" onSubmit="return validate1();">
            <table width="95%" border="1" cellspacing="2" cellpadding="2">
                    <span><select name="problem" id="problem" style="margin-left: 1.3%">
                            <option value="-1">Select Defect Group</option>
                            <?php
                            IF ($_GET['area'] == 'civil') {
                                $cntry = mysql_query("SELECT `defect_Id`, `defect_name` FROM civil_defect ORDER BY `defect_name` ASC");
                                while ($row = mysql_fetch_assoc($cntry)) {
                                    ?>	
                                    <option value="<?php echo $row['defect_name']; ?>"  <?php if ($_POST[problem] == $row[defect_name]) echo "selected"; ?> <?php if ($_GET[problem] == $row[defect_name]) echo "selected"; ?> ><?php echo $row['defect_name']; ?></option> 

                                    <?php
                                }
                            }
                            ?>
                            <?php
                            IF ($_GET['area'] == 'electric') {
                                $cntry = mysql_query("SELECT `defect_Id`, `defect_name` FROM electric_defect ORDER BY `defect_name` ASC");
                                while ($row = mysql_fetch_assoc($cntry)) {
                                    ?>	
                                    <option value="<?php echo $row['defect_name']; ?>"  <?php if ($_POST[problem] == $row[defect_name]) echo "selected"; ?> <?php if ($_GET[problem] == $row[defect_name]) echo "selected"; ?> ><?php echo $row['defect_name']; ?></option> 

                                    <?php
                                }
                            }
                            ?>


                        </select>									

                    </span>                   
                    <input type="submit" name="submit" id="submit" value="Submit"  />
            </form>
        <?php if ($_SESSION['privilege'] != 0) { ?>
            <span style="margin-left: 20px">
                Type:&nbsp;&nbsp;
                <select name="type" id="type">
                    <option class="" value="">Type</option>
                    <option class="" value="A" <?php if ($_POST['type'] == "A") echo "selected"; ?>>A</option>
                    <option class="" value="B" <?php if ($_POST['type'] == "B") echo "selected"; ?>>B</option>
                    <option class="" value="C" <?php if ($_POST['type'] == "C") echo "selected"; ?>>C</option>
                    <option class="" value="D" <?php if ($_POST['type'] == "D") echo "selected"; ?>>D</option>
                    <option class="" value="E" <?php if ($_POST['type'] == "E") echo "selected"; ?>>E</option>
                    <option class="" value="F" <?php if ($_POST['type'] == "F") echo "selected"; ?>>F</option>
                </select>
                Bulid no:
                <input type="text" id="buildno_txt" class="demoInputBox" name="buildno" value="<?php echo $_POST['buildno'] ?>" size=2" style="width: 5%;">
                Qrt no:  &nbsp;&nbsp;
                <input type="text" id="qrtno_txt" class="demoInputBox" name="qrtno" value="<?php echo $_POST['qrtno']?>" size="3" style="width: 5%">
                <input type="submit" name="submit" value="Get List" />                
            </span>
        <?php } ?> 
        <tr>
            <td colspan=3><?php
                echo 'Total:-' . $total_pages . "    " . $paginate;
                ?>

            </td>
            <td><a href="list1.php?status=1&problem=<?php if ($_POST[problem]) echo $_POST[problem];echo $_GET[problem]; ?>&area=<?php echo $_GET['area']; ?>&address=<?php echo $address?>">View New</a></td>
            <td><a href="list1.php?status=2&problem=<?php if ($_POST[problem]) echo $_POST[problem];echo $_GET[problem]; ?>&area=<?php echo $_GET['area']; ?>">View Attended</a></td>
            <td><a href="list1.php?status=3&problem=<?php if ($_POST[problem]) echo $_POST[problem];echo $_GET[problem]; ?>&area=<?php echo $_GET['area']; ?>">View Pending</a></td>
            <td><a href="list1.php?status=4&problem=<?php if ($_POST[problem]) echo $_POST[problem];echo $_GET[problem]; ?>&area=<?php echo $_GET['area']; ?>">View Qrt Locked</a></td>
            <td><a href="http://192.168.103.101:7777/esuvidha/list1.php?area=<?php echo $_GET['area']; ?>">View All</a></td>
        </tr>
        <tr>
            <th width='5%'>Ticket ID</th>
            <th width='24%'>Name</th>
            <th width='33%'>Defect</th>
            <th width='9%'>Create Date</th>
            <th width='10%'>Mobile No</th>
            <th width='9%'>Status</th>
            <th width='23%'>Quarter Number</th>
            <th width='5%'>Signature</th>
        </tr>
        <?php while ($row = mysql_fetch_array($result)) { ?>
            <tr>
                <td><a target="_blank" href="view.php?ticketid=<?php echo $row['ticketid'] ?>&area=<?php echo $_GET['area']; ?>"><?php echo $row['ticketid'];
        $_GET ?></a></td>
                <td><?php echo empName($row['Name']); ?></td>
                <td><a target="_blank" href="view.php?ticketid=<?php echo $row['ticketid'] ?>&area=<?php echo $_GET['area']; ?>"><?php echo $row['remark']; ?></a></td>
                <td><?php
                    //echo $row['createdate'] ; 
                    echo date("d/m/y", strtotime($row['createdate']));
                    ?>

                </td>
                <td><?php echo $row['Mobile_Number']; ?></td>
                <td <?php if ($row['status'] == 1) { ?> class="datacellone" <?php } ?> ><?php
                    if ($row['status'] == 1)
                        echo "New";
                    if ($row['status'] == 2)
                        echo "Attended";
                    if ($row['status'] == 3)
                        echo "Pending";
                    if ($row['status'] == 4)
                        echo "QRT LOCKED";
                    ?></td>
                <td><?php
                    if ($_SESSION['privilege'] == 2 or $_SESSION['privilege'] == 1)
                        echo $row['qrtno'];
                    else
                        echo $_SESSION['quarterno'];
                    ?></td>
                <td><?php ?></td>

            </tr>        	<?php } ?>
    </table>
    </div>      <?php } ?>
