<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacivil_ticketmaster_Report = array();
	$tdatacivil_ticketmaster_Report[".truncateText"] = true;
	$tdatacivil_ticketmaster_Report[".NumberOfChars"] = 80;
	$tdatacivil_ticketmaster_Report[".ShortName"] = "civil_ticketmaster_Report";
	$tdatacivil_ticketmaster_Report[".OwnerID"] = "";
	$tdatacivil_ticketmaster_Report[".OriginalTable"] = "civil_ticketmaster";

//	field labels
$fieldLabelscivil_ticketmaster_Report = array();
$fieldToolTipscivil_ticketmaster_Report = array();
$pageTitlescivil_ticketmaster_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscivil_ticketmaster_Report["English"] = array();
	$fieldToolTipscivil_ticketmaster_Report["English"] = array();
	$pageTitlescivil_ticketmaster_Report["English"] = array();
	$fieldLabelscivil_ticketmaster_Report["English"]["ticketid"] = "Ticketid";
	$fieldToolTipscivil_ticketmaster_Report["English"]["ticketid"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["emp_id"] = "Emp Id";
	$fieldToolTipscivil_ticketmaster_Report["English"]["emp_id"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["defect_id"] = "Defect Id";
	$fieldToolTipscivil_ticketmaster_Report["English"]["defect_id"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["problem"] = "Problem";
	$fieldToolTipscivil_ticketmaster_Report["English"]["problem"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["assign"] = "Assign";
	$fieldToolTipscivil_ticketmaster_Report["English"]["assign"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["createdate"] = "Createdate";
	$fieldToolTipscivil_ticketmaster_Report["English"]["createdate"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["solvedate"] = "Solvedate";
	$fieldToolTipscivil_ticketmaster_Report["English"]["solvedate"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["status"] = "Status";
	$fieldToolTipscivil_ticketmaster_Report["English"]["status"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["ipaddress"] = "Ipaddress";
	$fieldToolTipscivil_ticketmaster_Report["English"]["ipaddress"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["priority"] = "Priority";
	$fieldToolTipscivil_ticketmaster_Report["English"]["priority"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["remark"] = "Remark";
	$fieldToolTipscivil_ticketmaster_Report["English"]["remark"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["nameofperson"] = "Nameofperson";
	$fieldToolTipscivil_ticketmaster_Report["English"]["nameofperson"] = "";
	$fieldLabelscivil_ticketmaster_Report["English"]["ext"] = "Ext";
	$fieldToolTipscivil_ticketmaster_Report["English"]["ext"] = "";
	if (count($fieldToolTipscivil_ticketmaster_Report["English"]))
		$tdatacivil_ticketmaster_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscivil_ticketmaster_Report[""] = array();
	$fieldToolTipscivil_ticketmaster_Report[""] = array();
	$pageTitlescivil_ticketmaster_Report[""] = array();
	if (count($fieldToolTipscivil_ticketmaster_Report[""]))
		$tdatacivil_ticketmaster_Report[".isUseToolTips"] = true;
}


	$tdatacivil_ticketmaster_Report[".NCSearch"] = true;



$tdatacivil_ticketmaster_Report[".shortTableName"] = "civil_ticketmaster_Report";
$tdatacivil_ticketmaster_Report[".nSecOptions"] = 0;
$tdatacivil_ticketmaster_Report[".recsPerRowPrint"] = 1;
$tdatacivil_ticketmaster_Report[".mainTableOwnerID"] = "";
$tdatacivil_ticketmaster_Report[".moveNext"] = 1;
$tdatacivil_ticketmaster_Report[".entityType"] = 2;

$tdatacivil_ticketmaster_Report[".strOriginalTableName"] = "civil_ticketmaster";

	



$tdatacivil_ticketmaster_Report[".showAddInPopup"] = false;

$tdatacivil_ticketmaster_Report[".showEditInPopup"] = false;

$tdatacivil_ticketmaster_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacivil_ticketmaster_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacivil_ticketmaster_Report[".fieldsForRegister"] = array();

$tdatacivil_ticketmaster_Report[".listAjax"] = false;

	$tdatacivil_ticketmaster_Report[".audit"] = false;

	$tdatacivil_ticketmaster_Report[".locking"] = false;

$tdatacivil_ticketmaster_Report[".edit"] = true;
$tdatacivil_ticketmaster_Report[".afterEditAction"] = 1;
$tdatacivil_ticketmaster_Report[".closePopupAfterEdit"] = 1;
$tdatacivil_ticketmaster_Report[".afterEditActionDetTable"] = "";

$tdatacivil_ticketmaster_Report[".add"] = true;
$tdatacivil_ticketmaster_Report[".afterAddAction"] = 1;
$tdatacivil_ticketmaster_Report[".closePopupAfterAdd"] = 1;
$tdatacivil_ticketmaster_Report[".afterAddActionDetTable"] = "";

$tdatacivil_ticketmaster_Report[".list"] = true;

$tdatacivil_ticketmaster_Report[".view"] = true;


$tdatacivil_ticketmaster_Report[".exportTo"] = true;

$tdatacivil_ticketmaster_Report[".printFriendly"] = true;

$tdatacivil_ticketmaster_Report[".delete"] = true;

$tdatacivil_ticketmaster_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacivil_ticketmaster_Report[".searchSaving"] = false;
//

$tdatacivil_ticketmaster_Report[".showSearchPanel"] = true;
		$tdatacivil_ticketmaster_Report[".flexibleSearch"] = true;

$tdatacivil_ticketmaster_Report[".isUseAjaxSuggest"] = true;




$tdatacivil_ticketmaster_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacivil_ticketmaster_Report[".isUseTimeForSearch"] = false;



$tdatacivil_ticketmaster_Report[".badgeColor"] = "DB7093";


$tdatacivil_ticketmaster_Report[".allSearchFields"] = array();
$tdatacivil_ticketmaster_Report[".filterFields"] = array();
$tdatacivil_ticketmaster_Report[".requiredSearchFields"] = array();

$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "ticketid";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "emp_id";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "defect_id";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "problem";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "assign";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "createdate";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "solvedate";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "status";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "ipaddress";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "priority";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "remark";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "nameofperson";
	$tdatacivil_ticketmaster_Report[".allSearchFields"][] = "ext";
	

$tdatacivil_ticketmaster_Report[".googleLikeFields"] = array();
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "status";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".googleLikeFields"][] = "ext";


$tdatacivil_ticketmaster_Report[".advSearchFields"] = array();
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "status";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".advSearchFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".tableType"] = "report";

$tdatacivil_ticketmaster_Report[".printerPageOrientation"] = 0;
$tdatacivil_ticketmaster_Report[".nPrinterPageScale"] = 100;

$tdatacivil_ticketmaster_Report[".nPrinterSplitRecords"] = 40;

$tdatacivil_ticketmaster_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatacivil_ticketmaster_Report[".geocodingEnabled"] = false;

//report settings
$tdatacivil_ticketmaster_Report[".printReportLayout"] = 6;

$tdatacivil_ticketmaster_Report[".reportPrintPartitionType"] = 1;
$tdatacivil_ticketmaster_Report[".reportPrintGroupsPerPage"] = 40;
$tdatacivil_ticketmaster_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdatacivil_ticketmaster_Report[".lowGroup"] = 0;



$tdatacivil_ticketmaster_Report[".pageSize"] = 20;






$tdatacivil_ticketmaster_Report[".repShowDet"] = true;

$tdatacivil_ticketmaster_Report[".reportLayout"] = 6;

//end of report settings




$tdatacivil_ticketmaster_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacivil_ticketmaster_Report[".strOrderBy"] = $tstrOrderBy;

$tdatacivil_ticketmaster_Report[".orderindexes"] = array();

$tdatacivil_ticketmaster_Report[".sqlHead"] = "SELECT ticketid,  	emp_id,  	defect_id,  	problem,  	assign,  	createdate,  	solvedate,  	status,  	ipaddress,  	priority,  	remark,  	nameofperson,  	ext";
$tdatacivil_ticketmaster_Report[".sqlFrom"] = "FROM civil_ticketmaster";
$tdatacivil_ticketmaster_Report[".sqlWhereExpr"] = "";
$tdatacivil_ticketmaster_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacivil_ticketmaster_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacivil_ticketmaster_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatacivil_ticketmaster_Report[".highlightSearchResults"] = true;

$tableKeyscivil_ticketmaster_Report = array();
$tableKeyscivil_ticketmaster_Report[] = "ticketid";
$tdatacivil_ticketmaster_Report[".Keys"] = $tableKeyscivil_ticketmaster_Report;

$tdatacivil_ticketmaster_Report[".listFields"] = array();
$tdatacivil_ticketmaster_Report[".listFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".listFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".listFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".listFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".listFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".listFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".listFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".listFields"][] = "status";
$tdatacivil_ticketmaster_Report[".listFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".listFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".listFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".listFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".listFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".hideMobileList"] = array();


$tdatacivil_ticketmaster_Report[".viewFields"] = array();
$tdatacivil_ticketmaster_Report[".viewFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "status";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".viewFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".addFields"] = array();
$tdatacivil_ticketmaster_Report[".addFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".addFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".addFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".addFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".addFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".addFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".addFields"][] = "status";
$tdatacivil_ticketmaster_Report[".addFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".addFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".addFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".addFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".addFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".masterListFields"] = array();
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "status";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".masterListFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".inlineAddFields"] = array();
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "status";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".inlineAddFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".editFields"] = array();
$tdatacivil_ticketmaster_Report[".editFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".editFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".editFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".editFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".editFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".editFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".editFields"][] = "status";
$tdatacivil_ticketmaster_Report[".editFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".editFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".editFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".editFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".editFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".inlineEditFields"] = array();
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "status";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".inlineEditFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".exportFields"] = array();
$tdatacivil_ticketmaster_Report[".exportFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "status";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".exportFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".importFields"] = array();
$tdatacivil_ticketmaster_Report[".importFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".importFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".importFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".importFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".importFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".importFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".importFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".importFields"][] = "status";
$tdatacivil_ticketmaster_Report[".importFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".importFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".importFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".importFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".importFields"][] = "ext";

$tdatacivil_ticketmaster_Report[".printFields"] = array();
$tdatacivil_ticketmaster_Report[".printFields"][] = "ticketid";
$tdatacivil_ticketmaster_Report[".printFields"][] = "emp_id";
$tdatacivil_ticketmaster_Report[".printFields"][] = "defect_id";
$tdatacivil_ticketmaster_Report[".printFields"][] = "problem";
$tdatacivil_ticketmaster_Report[".printFields"][] = "assign";
$tdatacivil_ticketmaster_Report[".printFields"][] = "createdate";
$tdatacivil_ticketmaster_Report[".printFields"][] = "solvedate";
$tdatacivil_ticketmaster_Report[".printFields"][] = "status";
$tdatacivil_ticketmaster_Report[".printFields"][] = "ipaddress";
$tdatacivil_ticketmaster_Report[".printFields"][] = "priority";
$tdatacivil_ticketmaster_Report[".printFields"][] = "remark";
$tdatacivil_ticketmaster_Report[".printFields"][] = "nameofperson";
$tdatacivil_ticketmaster_Report[".printFields"][] = "ext";

//	ticketid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ticketid";
	$fdata["GoodName"] = "ticketid";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","ticketid");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ticketid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["ticketid"] = $fdata;
//	emp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "emp_id";
	$fdata["GoodName"] = "emp_id";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","emp_id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "emp_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emp_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["emp_id"] = $fdata;
//	defect_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "defect_id";
	$fdata["GoodName"] = "defect_id";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","defect_id");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "defect_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "defect_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["defect_id"] = $fdata;
//	problem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "problem";
	$fdata["GoodName"] = "problem";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","problem");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "problem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "problem";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["problem"] = $fdata;
//	assign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "assign";
	$fdata["GoodName"] = "assign";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","assign");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "assign";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assign";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["assign"] = $fdata;
//	createdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "createdate";
	$fdata["GoodName"] = "createdate";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","createdate");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "createdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createdate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacivil_ticketmaster_Report["createdate"] = $fdata;
//	solvedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "solvedate";
	$fdata["GoodName"] = "solvedate";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","solvedate");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "solvedate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "solvedate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacivil_ticketmaster_Report["solvedate"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","status");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["status"] = $fdata;
//	ipaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ipaddress";
	$fdata["GoodName"] = "ipaddress";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","ipaddress");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ipaddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ipaddress";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["ipaddress"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","priority");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priority";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["priority"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","remark");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remark";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["remark"] = $fdata;
//	nameofperson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nameofperson";
	$fdata["GoodName"] = "nameofperson";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","nameofperson");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nameofperson";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nameofperson";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["nameofperson"] = $fdata;
//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster_Report","ext");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ext";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster_Report["ext"] = $fdata;


$tables_data["civil_ticketmaster Report"]=&$tdatacivil_ticketmaster_Report;
$field_labels["civil_ticketmaster_Report"] = &$fieldLabelscivil_ticketmaster_Report;
$fieldToolTips["civil_ticketmaster_Report"] = &$fieldToolTipscivil_ticketmaster_Report;
$page_titles["civil_ticketmaster_Report"] = &$pageTitlescivil_ticketmaster_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["civil_ticketmaster Report"] = array();
//	civil_ticketremarks
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="civil_ticketremarks";
		$detailsParam["dOriginalTable"] = "civil_ticketremarks";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "civil_ticketremarks";
	$detailsParam["dCaptionTable"] = GetTableCaption("civil_ticketremarks");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["civil_ticketmaster Report"][$dIndex] = $detailsParam;

	
		$detailsTablesData["civil_ticketmaster Report"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["civil_ticketmaster Report"][$dIndex]["masterKeys"][]="ticketid";

				$detailsTablesData["civil_ticketmaster Report"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["civil_ticketmaster Report"][$dIndex]["detailKeys"][]="ticketid";

// tables which are master tables for current table (detail)
$masterTablesData["civil_ticketmaster Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_civil_ticketmaster_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ticketid,  	emp_id,  	defect_id,  	problem,  	assign,  	createdate,  	solvedate,  	status,  	ipaddress,  	priority,  	remark,  	nameofperson,  	ext";
$proto0["m_strFrom"] = "FROM civil_ticketmaster";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketid",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto6["m_sql"] = "ticketid";
$proto6["m_srcTableName"] = "civil_ticketmaster Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "emp_id",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto8["m_sql"] = "emp_id";
$proto8["m_srcTableName"] = "civil_ticketmaster Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "defect_id",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto10["m_sql"] = "defect_id";
$proto10["m_srcTableName"] = "civil_ticketmaster Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "problem",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto12["m_sql"] = "problem";
$proto12["m_srcTableName"] = "civil_ticketmaster Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "assign",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto14["m_sql"] = "assign";
$proto14["m_srcTableName"] = "civil_ticketmaster Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "createdate",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto16["m_sql"] = "createdate";
$proto16["m_srcTableName"] = "civil_ticketmaster Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "solvedate",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto18["m_sql"] = "solvedate";
$proto18["m_srcTableName"] = "civil_ticketmaster Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto20["m_sql"] = "status";
$proto20["m_srcTableName"] = "civil_ticketmaster Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ipaddress",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto22["m_sql"] = "ipaddress";
$proto22["m_srcTableName"] = "civil_ticketmaster Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto24["m_sql"] = "priority";
$proto24["m_srcTableName"] = "civil_ticketmaster Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto26["m_sql"] = "remark";
$proto26["m_srcTableName"] = "civil_ticketmaster Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "nameofperson",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto28["m_sql"] = "nameofperson";
$proto28["m_srcTableName"] = "civil_ticketmaster Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ext",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster Report"
));

$proto30["m_sql"] = "ext";
$proto30["m_srcTableName"] = "civil_ticketmaster Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "civil_ticketmaster";
$proto33["m_srcTableName"] = "civil_ticketmaster Report";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ticketid";
$proto33["m_columns"][] = "emp_id";
$proto33["m_columns"][] = "defect_id";
$proto33["m_columns"][] = "problem";
$proto33["m_columns"][] = "assign";
$proto33["m_columns"][] = "createdate";
$proto33["m_columns"][] = "solvedate";
$proto33["m_columns"][] = "status";
$proto33["m_columns"][] = "ipaddress";
$proto33["m_columns"][] = "priority";
$proto33["m_columns"][] = "remark";
$proto33["m_columns"][] = "nameofperson";
$proto33["m_columns"][] = "ext";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "civil_ticketmaster";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "civil_ticketmaster Report";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="civil_ticketmaster Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_civil_ticketmaster_Report = createSqlQuery_civil_ticketmaster_Report();


	
		;

													

$tdatacivil_ticketmaster_Report[".sqlquery"] = $queryData_civil_ticketmaster_Report;

$tableEvents["civil_ticketmaster Report"] = new eventsBase;
$tdatacivil_ticketmaster_Report[".hasEvents"] = false;

?>