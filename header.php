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

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <?PHP IF ($_SESSION['area'] == 'civil') { ?>
            <style>
                body { background-image:url(images/back.JPG); no-repeat;}

            </style><?PHP } ?>
        <?PHP IF ($_GET['id2'] == 'civil') { ?>
            <style>
                body { background-image:url(images/back.JPG); no-repeat;}

            </style><?PHP } ?>
        <?PHP IF ($_SESSION['area'] == 'electric') { ?>
            <style>
                body { background-image:url(images/back.JPG); no-repeat;}

            </style><?PHP } ?>
        <?PHP IF ($_GET['id2'] == 'electric') { ?>
            <style>
                body { background-image:url(images/back.JPG); no-repeat;}

            </style><?PHP } ?>
        <?PHP
        IF ($_SESSION['area'] == 'electric') {
            $tableName = "electric_ticketmaster";
        }
        IF ($_SESSION['area'] == 'civil') {
            $tableName1 = "civil_ticketremarks";
        }
        IF ($_SESSION['area'] == 'electric') {
            $tableName1 = "electric_ticketremarks";
        }
        ?>

        <title>Khaperkheda TPS e-सुविधा</title>
    </head>
    <script language="javascript" type="text/javascript">
        function validate()
        {
            var str;
            str = document.form1.cpfno.value;
            var n = str.split("#");
            var id = n[0];
            var name = n[1];
            var con = n[2];
            var pri = n[3];
            document.form1.name.value = name;
            document.form1.id.value = id;
            document.form1.contact.value = con;
            document.form1.privilege.value = pri;
            if (str == "")
            {
                alert("Please select section");
                document.form1.cpfno.focus();
                return false;
            } else
                return true;
        }
        function validate1()
        {
            var problem;
            var section;
            problem = document.form1.problem.value;
            section = document.form1.section.value;
            if (problem == "")
            {
                alert("Please select problem");
                document.form1.problem.focus();
                return false;
            }
            var str;
            str = document.form1.section.value;
            var n = str.split("#");
            var id = n[0];
            var name = n[1];
            var con = n[2];
            var pri = n[3];
            document.form1.name.value = name;
            document.form1.id.value = id;
            document.form1.contact.value = con;
            document.form1.privilege.value = pri;
            if (section == "")
            {
                alert("Please select section");
                document.form1.section.focus();
                return false;
            } else
                return true;
        }
        function validate2()
        {
            var remark;
            remark = document.reply.remark.value;
            if (remark == "")
            {
                alert("Please Enter remark");
                document.reply.remark.focus();
                return false;
            } else
                return true;
        }
    </script>
    <body>
        <div class="heading">
            <img src="images/logo.png" alt=""/>        
            <h1 class="headline">KHAPERKHEDA THERMAL POWER STATION</h1>
        </div>
        <span>
     <!--       <a href="http://192.168.100.77:8080/esuvidha/index.php"><span style="font-size:20px;color: lightskyblue; text-align: left; margin-left: 20px;top:10px">Home</span> </a>     -->
            <?php if (isset($_SESSION['firstname'])) { ?>
                <span style="float:right; color: lightskyblue;font-size:20px; margin-right: 2%"> Hello, <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></span>
            <?php } ?>
        </span>
        <?php
        $area1 = $_GET['id2'];
        IF ($_SESSION['area'] == 'civil' or $area1 == 'civil') {
            ?>
            <h1 style="text-align: center; margin: 0px"> <u> CIVIL COLONY MAINTENANCE </u> </h1> 
        <?php } elseif ($_SESSION['area'] == 'electric' OR $area1 == 'electric') { ?>
            <h1 style="text-align: center"> <u> EM-COLONY </u> </h1><?php } ?>
        <?php IF ($area1 == '' AND ! isset($_SESSION['sapid'])) { ?>
            <h2></h2><?php } ?>

        <div id="menu" style="margin-left: 25%; margin-top: 2%">
            <ul >
                <?php if (isset($_SESSION['sapid'])) { ?>

                    <?php
                    echo $_POST['area'];
                    IF ($_SESSION['area'] == 'civil' and $_SESSION['quarterno'] !== '') {
                        ?>
                        <li class="menuitem"><a href="addticket_civil.php">Add Defect</a></li> 
                    <?php }IF ($_SESSION['area'] == 'electric' and $_SESSION['quarterno'] !== '') { ?>
                        <li class="menuitem"><a href="addticket_electric.php">Add Defect</a></li><?php } ?>
                    <li class="menuitem"><a href="list1.php">My Defect</a></li>
                    <li class="menuitem"><a href="#">IP Address <?php echo get_real_up_address(); ?></a></li>
                    <?php if ($_SESSION['privilege'] == 0) { ?>
                        <li class="menuitem"><a href="editprofile.php">Edit Profile</a></li>

                        <?php } if($_SESSION['privilege'] == 1) { ?>
                        <li class="menuitem"><a href="register.php">Register New Account</a></li>
                        <?php
                        }?>
                    <li class="menuitem"><a href="logout.php">Logout</a></li>                    
                    <?php } ?> 
                                            
                <!--li class="menuitem"><a href="search.php">Search</a></li--> 
            </ul>
        </div>

