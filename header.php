<?php
error_reporting(0);
session_start();

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
        <style>
            body { background-image:url(images/back.JPG); no-repeat;}

        </style>
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
            <img src="images/logo.png" alt="Mahagenco"/>        
            <h1 class="headline">KHAPERKHEDA THERMAL POWER STATION</h1>
        </div>
        <span>
<!--         <a href="http://192.168.103.101:7777/esuvidha/index.php"><span style="font-size:20px;color: lightskyblue; text-align: left; margin-left: 20px;top:10px">Home</span> </a>   -->
            <?php if (isset($_SESSION['firstname'])) { ?>
                <span style="float:right; color: lightskyblue;font-size:20px; margin-right: 2%"> Welcome, <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></span>
            <?php } ?>
        </span>
        <?php
        $area1 = $_GET['id2'];
        IF ($_GET['area'] == 'civil' or $area1 == 'civil') {
            ?>
            <h2 style="text-align: center; margin: 30px 0px 0px 0px"> <u> CIVIL COLONY MAINTENANCE </u> </h2> 
        <?php } elseif ($_GET['area'] == 'electric' OR $area1 == 'electric') { ?>
            <h2 style="text-align: center; margin: 30px 0px 0px 0px"> <u> EM-COLONY </u> </h2><?php } ?>
        <?php IF ($area1 == '' AND ! isset($_SESSION['sapid'])) { ?>
            <h2></h2><?php } ?>

        <div class="topnav">
                <?php if (isset($_SESSION['sapid'])) { ?>
                    <a href="http://192.168.103.101:7777/esuvidha/index.php"><span>Home</span> </a> 
                    <?php
                    IF ($_GET['area'] == 'civil' and $_SESSION['quarterno'] !== '') {
                        ?>
                         <a href="addticket_civil.php?area=<?php echo $_GET['area'];?>">Add Defect</a>  
                    <?php }IF ($_GET['area'] == 'electric' and $_SESSION['quarterno'] !== '') { ?>
                         <a href="addticket_electric.php?area=<?php echo $_GET['area'];?>">Add Defect</a> <?php } 
                    if(isset($_GET['area'])) {?>  <a href="list1.php?area=<?php echo $_GET['area'];?>">Defect List</a>  <?php } 
                    if(!isset($_GET['area'])) {?>  <a href="#">IP Address <?php echo get_real_up_address(); ?></a>  <?php } ?>
                     <a href="editprofile.php">Edit Profile</a> 
                    <?php if ($_SESSION['privilege'] == 1) { ?>
                         <a href="register.php?area=civil"> New / Change in Quarter</a> 
                        <?php }
                    ?>
                     <a href="logout.php">Logout</a>                     
                    <?php } ?> 

                <!--li class="menuitem"><a href="search.php">Search</a></li--> 

        </div>

