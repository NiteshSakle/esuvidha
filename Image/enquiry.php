<?php include("header.html"); ?>
<script language="javascript" type="text/javascript">
function validate()
{
   	var first_name;
	var last_name;
	var email;
	 var telephone;
	var comments;
    first_name=document.form1.first_name.value;
	last_name=document.form1.last_name.value;
	email=document.form1.email.value;
	telephone=document.form1.telephone.value;
	comments=document.form1.comments.value;

	if(first_name=="")
	{
	   alert("Please enter first name");
	   document.form1.first_name.focus();
	   return false;
	}
		if(last_name=="")
	{
	   alert("Please enter last name");
	   document.form1.last_name.focus();
	   return false;
	}
			if(email=="")
	{
	   alert("Please enter email");
	   document.form1.email.focus();
	   return false;
	}
				if(telephone=="")
	{
	   alert("Please enter telephone");
	   document.form1.telephone.focus();
	   return false;
	}
				if(comments=="")
	{
	   alert("Please enter comments");
	   document.form1.comments.focus();
	   return false;
	}
	else
	return true;
}
 </script>
<!-- end #header -->
<div id="page">
	<div id="content">
		<!--div class="post">
			<h1 class="title">Welcome to Aquaria!</h1>
			<div class="story">
				<p><strong>Aquaria</strong> is a free template from <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5 License</a>. The  photo is from <a href="http://www.pdphoto.org/">PDPhoto.org</a>. You're free to use it for both commercial or personal use. I only ask that you link back to my site in some way. <em><strong>Enjoy :)</strong></em></p>
			</div>
			<div class="meta">
				<p class="date">Posted on February 22, 2007 by Admin</p>
				<p class="file">Filed under <a href="#">Uncategorized</a> | <a href="#">Edit</a> | <a href="#">28 Comments</a></p>
			</div>
		</div-->
		<div class="post boxed">
			<h2 class="title">Enquiry</h2>
			<div class="story">
				<p><strong>For Enquiry, Please fill out the form:</strong></p>
<form id="form1" name="form1" method="post" action="html_form_send.php" onSubmit="return validate();">
<table width="450px">
</tr>
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30"><br><br>
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30"><br><br>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30"><br><br>
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30"><br><br>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea><br><br>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" name="Submit" id="button1" value="Submit" /> 
 </td>
</tr>
</table>
</form>
				
			</div>
			<div class="meta">
			</div>
		</div>
	</div>
	<!-- end #content -->
	<?php include("leftmenu.html"); ?>
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
	<?php include("footer.html"); ?>
