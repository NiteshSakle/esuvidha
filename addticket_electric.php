<script type="text/javascript">
    function changeHandler(target) {
        var val = target.value;
        if (val == 'Other')
            document.getElementById('other').hidden = false;

    }
    function edValueKeyPress()
    {
        var edValue = document.getElementById("name");
        edValue.value = "";

    }
    var xmlhttp;
    function ajaxFunction(url, myReadyStateFunc)
    {
        if (window.XMLHttpRequest)
        {
            // For IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else
        {
            // For IE5, IE6
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = myReadyStateFunc;        // myReadyStateFunc = function
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }

    function getState(x)
    {
//alert(x);
        x = x.split("#");
        y = x[0];
//alert(y);
        // in second argument of ajaxFunction we are passing whole function (onreadystatechange function).
        // Goto getState.php code
        ajaxFunction('getState.php?cid=' + y, function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //alert("vishal"+xmlhttp.responseText);

                var s = xmlhttp.responseText;    //   s = "1,2,3,|state1,state2,state3,"
                s = s.split("|");                              //   s = ["1,2,3,", "state1,state2,state3,"]
                sid = s[0].split(",");                    //  sid = [1,2,3,]
                sval = s[1].split(",");                   //  sval = [state1, state2, state3,]
                st = document.getElementById('remark')
                st.length = 0
                for (i = 0; i < sid.length - 1; i++)
                {
                    st[i] = new Option(sval[i], sid[i])
                }
                getCity(-1) // emptying the city.
            }
        });
    }
    function getCity(x)
    {
        // in second argument of ajaxFunction we are passing whole function.
        // Goto getCity.php code
        ajaxFunction("getCity.php?sid=" + x, function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var c = xmlhttp.responseText;
                c = c.split("|");
                cid = c[0].split(",");
                cval = c[1].split(",");
                ct = document.getElementById('city')
                ct.length = 0
                for (i = 0; i < cid.length - 1; i++)
                {
                    ct[i] = new Option(cval[i], cid[i])
                }
            }
        });
    }


</script>

<?php
include("connect.php");
include("header.php");
include("shared_functions.php");

$result = mysql_query("SELECT * FROM electric_defect");
if ($_POST) {
    if (!isset($_SESSION['emp_id'])) {
        $_SESSION['sapid'] = $member['sapid'];
        $_SESSION['cpfno'] = $member['cpfno'];
        $_SESSION['privilege'] = $member['privilege'];
        $_SESSION['firstname'] = $member['firstname'];
        $_SESSION['lastname'] = $member['lastname'];
        $_SESSION['quarterno'] = $member['quarterno'];
    }

    $emp_id = $_SESSION['emp_id'];
    $sec = explode("#", $_POST['problem']);
    $defect_id = $sec[0];
    $problem = $sec[1];
    $other = $_POST['other'];
    $assign = $_SESSION['quarterno'];
    if($assign == '') {
        echo "<script>
            alert('Please Update Your information First..');
            window.location.href='editprofile.php?area=civil';
            </script>";
        exit();        
    }
    $status = 1;
    $ipaddress = get_real_up_address();
    $remark = $_POST['remark'];

    if($remark == "Please Select Subdefect") {
        echo "<script>
            alert('Please Select Sub Defect..!!');
            window.location.href='addticket_electric.php?area=electric';
            </script>";
            exit();
    }
    $nameofperson = $_POST['nameofperson'];
    $ext = $_POST['ext'];
    $remarkby = $_SESSION['firstname'];
    if ($problem == "Other") {

        $problem = $_POST['other'];
        if ($problem == "")
            $problem = $_POST['problem'];
    }
    if ($defect_id == -1 or $defect_id == "") {

        header('Location:addticket_electric.php?err=err');
        exit;
    } else {
        
        $qry1 = "INSERT INTO `electric_ticketmaster`(`emp_id`, `defect_id`, `problem`, `assign`, `status`, `ipaddress`, `remark`, `nameofperson`, `ext`) VALUES ('$emp_id','$defect_id','$problem','$assign','$status','$ipaddress','$remark','$nameofperson',$ext)";
        mysql_query($qry1);
        $ticketid = mysql_insert_id();        
        $qry = "INSERT INTO `electric_ticketremarks`(`ticketid`, `remark`,`remarkby`, `ipaddress`) VALUES ($ticketid,'$remark','$remarkby','$ipaddress')";
        mysql_query($qry);

        $msg = "Dear " . $_SESSION['firstname'] . " Thank you for contacting us. Your Ticket No is:" . $ticketid . "  We will get back to you soon!";
        $message = rawurlencode($msg);   
        sendMsg($ext, $message);
//        
//        try {
//            // Account details
//            $apiKey = urlencode('3sC/BU7S7LI-d14vm2GSfGKeRnbkZuqf3IVzd7GM8L');	
//            $msg = "Dear " . $_SESSION['firstname'] . " Thank you for contacting us. Your Ticket No is:" . $ticketid . "  We will get back to you soon!";
//            $sender = urlencode('MKHTPS');
//            $message = rawurlencode($msg);
//            // Prepare data for POST request
//            $data = array('apikey' => $apiKey, 'numbers' => $ext, "sender" => $sender, "message" => $message);
//            // Send the POST request with cURL
//            $ch = curl_init('https://api.textlocal.in/send/');
//            curl_setopt($ch, CURLOPT_POST, true);
//            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            $response = curl_exec($ch);
//            curl_close($ch);        
//        } catch (Exception $ex) {
//            
//        }

        echo "<script>
                    alert('Your ticket submitted successfully ..!!');
                    window.location.href='list1.php?area=electric';
                    </script>";

        exit;
    }
}
if($_SESSION['quarterno'] == "") {
        echo "<script>
            window.location.href='editprofile.php';
            </script>";
            exit();        
}
    
?>

<form id="form1" name="form1" method="post" action="addticket_electric.php" onSubmit="return validate1();">
    <div class="table-form">
        <table border="2px solid #ffffff" cellspacing="2" cellpadding="10" class="new-table" style="width: 100%" >
            <?php if ($_GET['err'] == "err") { ?>
                <tr>
                    <td colspan="2"><font color="red">Please select problem / sub problem</font></td>
                </tr>
            <?php } ?>
            <tr>
                <td>Select Defect<font color="red">*</font></td>
                <td> 

                    <h3><select name="problem" id="problem" onchange="getState(this.value)" required>
                            <option value="">Please Select Main Defect</option>
                            <?php
                            $cntry = mysql_query("SELECT `defect_Id`, `defect_name` FROM electric_defect ORDER BY `defect_name` ASC");
                            while ($row = mysql_fetch_assoc($cntry)) {
                                echo '<option value="' . $row['defect_Id'] . "#" . $row['defect_name'] . '">' . $row['defect_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </h3>

                </td>
            </tr>

            <tr>
                <td>Sub Defect<font color="red">*</font></td>
                <td><!--textarea name="remark" rows="9" cols="55"></textarea--> 
                    <h3><select name="remark" id="remark" onchange="getCity(this.value)">
                            <option value="-1">Please Select Sub Defect</option>
                        </select>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>Contact Person</td>
                <td><input type="text" name="nameofperson" id="nameofperson" value="<?php echo $_SESSION['firstname']; ?>" style="width: 40%"> *Other than registered name</td>
            </tr>
            <tr>
                <td>Contact No.</td>
                <td><input type="text" name="ext" id="ext" value="<?php echo $_SESSION['mobileno']; ?>" style="width: 40%" > *Other than registered number </td>
            </tr>
            <tr>
                <!--td>Priority</td>
                    <td><input type="radio" name="group1" value="1"> High<br>
                    <input type="radio" name="group1" value="2" checked> Medium<br>
                    <input type="radio" name="group1" value="3"> Low
                </td-->
            </tr>
            <?php if (!isset($_SESSION['section'])) { ?>
                <input type="hidden" name="name" id="name">
                <!--input type="hidden" name="id" id="id"-->
                <input type="hidden" name="contact" id="contact">
                <input type="hidden" name="privilege" id="privilege">

                <!--tr>
                  <td>Select Section</td>
                  <td> <select name="section" id="section" class="">
                           <option class="" value="">Select Section</option>
                <?php while ($row = mysql_fetch_array($result)) { ?>
                                               <option class="" value="<?php echo $row['id'] . "#" . $row['name'] . "#" . $row['contact'] . "#" . $row['privilege'] ?>"><?php echo $row['name'] ?></option>
                <?php } ?>
                                   </select>
                  </td>
               </tr>  <?php } else { ?>
               <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
            <?php } ?>
       <tr-->
            <td colspan="2">
                <input type="submit" name="submit" id="submit"  class="submitbutton" value="Submit" style="width: 50%"  />
            </td>         
            </tr>
        </table>
    </div>
</form>
<?php include("footer.php"); ?>

