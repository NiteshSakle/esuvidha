<?php
include("header.php");
include("connect.php");
$createdate=date('d/M/Y');
$result=mysql_query("SELECT * FROM section");

   $creationdate=date('Y-m-d h:i:s');

if($_POST){

echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;

   if(!isset($_SESSION['id'])) {
 $_SESSION['id']=$_POST['id'];
 $_SESSION['section']=$_POST['name'];
 $_SESSION['contact']=$_POST['contact'];
 $_SESSION['privilege']=$_POST['privilege']; }


   $sectionid=$_SESSION['id'];
   $circularno="KTPS/CE(O&M)/".strtoupper($_SESSION['section'])."/".$_POST['circularno'];

   $dispatchdate=$_POST['dispatchdate'];
   $creationdate=date('Y-m-d h:i:s');
   $body=addslashes($_POST['elm1']);
   $signedby=$_POST['signedby'];
      $subject=$_POST['subject'];
   $AllSH=$_POST['AllSH'];
   $AllSE=$_POST['AllSE'];
   $DyCE=$_POST['DyCE'];
   $CE=$_POST['CE'];
   //$signedby=$_POST['signedby'];
   
   $ipaddress=get_real_up_address();
   //$priority=$_POST['group1'];
   //$remark=$_POST['remark'];




   $qry="insert into mycircular values('','$creationdate','$dispatchdate','$circularno','$body','$sectionid','$ipaddress','$signedby','$subject')";

   mysql_query($qry);
     $cirid=mysql_insert_id();

      $string="";
      if($AllSH<>"")
        $string .=$AllSH."#";
      if($AllSE!="")
        $string .= $AllSE."#";
      if($DyCE!="")
        $string .= $DyCE."#";
      if($CE!="")
       $string .= $CE;

     $qry1="insert into refcir values('','$cirid','$string')";
     mysql_query($qry1);
     header('Location:circularsuccess.php?cirid='.$cirid);
     exit;
	}
 ?>
 <html>
 <head>
</head>
<body>
<form id="form1" name="form1" method="post" action="addcircularimage.php" onSubmit="return validate1();" enctype="multipart/form-data">
  <div id="contentText">
  <table width="680" border="1" cellspacing="1" cellpadding="2">
    <tr>
       <td width="80">CircularNO:</td>
       <td width="600"> KTPS/CE(O&M)/<?php echo strtoupper($_SESSION['section']); ?>/ <input type="text" name="circularno">Dated<input type="text" name="dispatchdate" value=<?php echo $creationdate; ?>></td>
    </tr>
	<tr>
       <td width="80">Subject:</td>
       <td width="600"><input type="text" name="subject" id="subject" size="75">  </td>
    </tr>
    <tr>
       <td valign="top">Upload Image</td>
       <td><input type="file" name="filename" id="filename" /> 	</td>
    </tr>
    
	
        <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="submit" id="submit" value="submit"  /> </td>
    </tr>
          </table>
  </div>
</form>
</body>
</html>
<?php  include("footer.php");  ?>