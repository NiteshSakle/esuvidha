<?php
$dalTablebuildings = array();
$dalTablebuildings["build_id"] = array("type"=>3,"varname"=>"build_id");
$dalTablebuildings["qrttype_id"] = array("type"=>3,"varname"=>"qrttype_id");
$dalTablebuildings["buildingnumber"] = array("type"=>3,"varname"=>"buildingnumber");
$dalTablebuildings["status"] = array("type"=>200,"varname"=>"status");
	$dalTablebuildings["build_id"]["key"]=true;

$dal_info["civil_at_localhost__buildings"] = &$dalTablebuildings;
?>