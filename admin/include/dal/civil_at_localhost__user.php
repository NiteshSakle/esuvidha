<?php
$dalTableuser = array();
$dalTableuser["emp_id"] = array("type"=>3,"varname"=>"emp_id");
$dalTableuser["sapid"] = array("type"=>3,"varname"=>"sapid");
$dalTableuser["cpfno"] = array("type"=>3,"varname"=>"cpfno");
$dalTableuser["desig_id"] = array("type"=>200,"varname"=>"desig_id");
$dalTableuser["firstname"] = array("type"=>200,"varname"=>"firstname");
$dalTableuser["lastname"] = array("type"=>200,"varname"=>"lastname");
$dalTableuser["quarterno"] = array("type"=>200,"varname"=>"quarterno");
$dalTableuser["mobileno"] = array("type"=>200,"varname"=>"mobileno");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password");
$dalTableuser["isActive"] = array("type"=>3,"varname"=>"isActive");
$dalTableuser["privilege"] = array("type"=>3,"varname"=>"privilege");
$dalTableuser["section"] = array("type"=>200,"varname"=>"section");
	$dalTableuser["emp_id"]["key"]=true;

$dal_info["civil_at_localhost__user"] = &$dalTableuser;
?>