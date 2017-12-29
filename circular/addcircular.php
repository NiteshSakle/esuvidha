<?php
include("header.php");
include("connect.php");
$createdate=date('d/M/Y');
$result=mysql_query("SELECT * FROM section");
if($_POST){
   if(!isset($_SESSION['id'])) {
 $_SESSION['id']=$_POST['id'];
 $_SESSION['section']=$_POST['name'];
 $_SESSION['contact']=$_POST['contact'];
 $_SESSION['privilege']=$_POST['privilege']; }


    $sectionid=$_SESSION['id'];
    $problem=$_POST['problem'];
    $assign='';
    $createdate=date('Y-m-d h:i:s');
    $solvedate='';
    $status=1;
    $ipaddress=get_real_up_address();
    $priority=$_POST['group1'];
    $remark=$_POST['remark'];


     $qry="insert into ticketmaster values('',$sectionid,'$problem','$assign','$createdate','$solvedate','$status','$ipaddress','$priority','$remark')";

    mysql_query($qry);
    $ticketid=mysql_insert_id();
    header('Location:ticketsuccess.php?ticket='.$ticketid);
       exit;
	}
 ?>
 <html>
 <head>
<!-- TinyMCE -->
<script language="javascript" type="text/javascript" src="tinymce_2_1_1_1/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		plugins : "table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,media,searchreplace,print,contextmenu,paste,directionality,fullscreen",
		theme_advanced_buttons1_add_before : "save,newdocument,separator",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
		theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator",
		theme_advanced_buttons3_add : "emotions,iespell,media,advhr,separator,print,separator,ltr,rtl,separator,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		content_css : "example_word.css",
	    plugi2n_insertdate_dateFormat : "%Y-%m-%d",
	    plugi2n_insertdate_timeFormat : "%H:%M:%S",
		external_link_list_url : "example_link_list.js",
		external_image_list_url : "example_image_list.js",
		media_external_list_url : "example_media_list.js",
		file_browser_callback : "fileBrowserCallBack",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		paste_auto_cleanup_on_paste : true,
		paste_convert_headers_to_strong : false,
		paste_strip_class_attributes : "all",
		paste_remove_spans : false,
		paste_remove_styles : false		
	});

	function fileBrowserCallBack(field_name, url, type, win) {
		// This is where you insert your custom filebrowser logic
		alert("Filebrowser callback: field_name: " + field_name + ", url: " + url + ", type: " + type);

		// Insert new URL, this would normaly be done in a popup
		win.document.forms[0].elements[field_name].value = "someurl.htm";
	}
</script>
<!-- /TinyMCE -->
</head>
<body>
<form id="form1" name="form1" method="post" action="addcircular.php" onSubmit="return validate1();" enctype="multipart/form-data">
  <div id="content_main">
  <table width="100%" border="1" cellspacing="2" cellpadding="2">
    <tr>
       <td>Circular NO:</td>
       <td> KTPS/CE(O&M)/<?php echo strtoupper($_SESSION['section']); ?>/ <input type="text" name="circularno">Dated<input type="text" name="dispatchdate" value=<?php echo $createdate; ?>></td>
    </tr>
    <tr>
       <td>Remark</td>
       <td>	<textarea id="elm1" name="elm1" rows="30" cols="70" >
		
	</textarea>  </td>
    </tr>
    <tr>
       <td>Signed By</td>
       <td><select name="signedby" id="" class="">
	   <option class="" value=""></option>	
           	<option class="" value="CE">CE</option>	
			<option class="" value="DyCE">DyCE</option>	
			<option class="" value="SE">SE</option>	
            <option class="" value="EE">EE</option>	
            <option class="" value="DyEE">DyEE</option>				
			</select></td>
    </tr>
	<tr>
       <td>Circulated To</td>
       <td>All SH<input type="checkbox" name="AllSH" value="ALL SH">All SE<input type="checkbox" name="AllSE" value="ALL SE">
	    DyCE<input type="checkbox" name="DyCE" value="DyCE">CE<input type="checkbox" name="CE" value="CE">
	   </td>
    </tr>
	<tr>
       <td>(OR)Upload Scanned File(JPG/PDF)</td>
       <td><input type="file" name="file" id="file"></td>
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