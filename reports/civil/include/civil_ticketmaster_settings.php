<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacivil_ticketmaster = array();
	$tdatacivil_ticketmaster[".truncateText"] = true;
	$tdatacivil_ticketmaster[".NumberOfChars"] = 80;
	$tdatacivil_ticketmaster[".ShortName"] = "civil_ticketmaster";
	$tdatacivil_ticketmaster[".OwnerID"] = "";
	$tdatacivil_ticketmaster[".OriginalTable"] = "civil_ticketmaster";

//	field labels
$fieldLabelscivil_ticketmaster = array();
$fieldToolTipscivil_ticketmaster = array();
$pageTitlescivil_ticketmaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscivil_ticketmaster["English"] = array();
	$fieldToolTipscivil_ticketmaster["English"] = array();
	$pageTitlescivil_ticketmaster["English"] = array();
	$fieldLabelscivil_ticketmaster["English"]["ticketid"] = "Ticketid";
	$fieldToolTipscivil_ticketmaster["English"]["ticketid"] = "";
	$fieldLabelscivil_ticketmaster["English"]["emp_id"] = "Emp Id";
	$fieldToolTipscivil_ticketmaster["English"]["emp_id"] = "";
	$fieldLabelscivil_ticketmaster["English"]["defect_id"] = "Defect Id";
	$fieldToolTipscivil_ticketmaster["English"]["defect_id"] = "";
	$fieldLabelscivil_ticketmaster["English"]["problem"] = "Problem";
	$fieldToolTipscivil_ticketmaster["English"]["problem"] = "";
	$fieldLabelscivil_ticketmaster["English"]["assign"] = "Assign";
	$fieldToolTipscivil_ticketmaster["English"]["assign"] = "";
	$fieldLabelscivil_ticketmaster["English"]["createdate"] = "Createdate";
	$fieldToolTipscivil_ticketmaster["English"]["createdate"] = "";
	$fieldLabelscivil_ticketmaster["English"]["solvedate"] = "Solvedate";
	$fieldToolTipscivil_ticketmaster["English"]["solvedate"] = "";
	$fieldLabelscivil_ticketmaster["English"]["status"] = "Status";
	$fieldToolTipscivil_ticketmaster["English"]["status"] = "";
	$fieldLabelscivil_ticketmaster["English"]["ipaddress"] = "Ipaddress";
	$fieldToolTipscivil_ticketmaster["English"]["ipaddress"] = "";
	$fieldLabelscivil_ticketmaster["English"]["priority"] = "Priority";
	$fieldToolTipscivil_ticketmaster["English"]["priority"] = "";
	$fieldLabelscivil_ticketmaster["English"]["remark"] = "Remark";
	$fieldToolTipscivil_ticketmaster["English"]["remark"] = "";
	$fieldLabelscivil_ticketmaster["English"]["nameofperson"] = "Nameofperson";
	$fieldToolTipscivil_ticketmaster["English"]["nameofperson"] = "";
	$fieldLabelscivil_ticketmaster["English"]["ext"] = "Ext";
	$fieldToolTipscivil_ticketmaster["English"]["ext"] = "";
	if (count($fieldToolTipscivil_ticketmaster["English"]))
		$tdatacivil_ticketmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscivil_ticketmaster[""] = array();
	$fieldToolTipscivil_ticketmaster[""] = array();
	$pageTitlescivil_ticketmaster[""] = array();
	if (count($fieldToolTipscivil_ticketmaster[""]))
		$tdatacivil_ticketmaster[".isUseToolTips"] = true;
}


	$tdatacivil_ticketmaster[".NCSearch"] = true;



$tdatacivil_ticketmaster[".shortTableName"] = "civil_ticketmaster";
$tdatacivil_ticketmaster[".nSecOptions"] = 0;
$tdatacivil_ticketmaster[".recsPerRowPrint"] = 1;
$tdatacivil_ticketmaster[".mainTableOwnerID"] = "";
$tdatacivil_ticketmaster[".moveNext"] = 1;
$tdatacivil_ticketmaster[".entityType"] = 0;

$tdatacivil_ticketmaster[".strOriginalTableName"] = "civil_ticketmaster";

	



$tdatacivil_ticketmaster[".showAddInPopup"] = false;

$tdatacivil_ticketmaster[".showEditInPopup"] = false;

$tdatacivil_ticketmaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacivil_ticketmaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacivil_ticketmaster[".fieldsForRegister"] = array();

$tdatacivil_ticketmaster[".listAjax"] = false;

	$tdatacivil_ticketmaster[".audit"] = false;

	$tdatacivil_ticketmaster[".locking"] = false;

$tdatacivil_ticketmaster[".edit"] = true;
$tdatacivil_ticketmaster[".afterEditAction"] = 1;
$tdatacivil_ticketmaster[".closePopupAfterEdit"] = 1;
$tdatacivil_ticketmaster[".afterEditActionDetTable"] = "";

$tdatacivil_ticketmaster[".add"] = true;
$tdatacivil_ticketmaster[".afterAddAction"] = 1;
$tdatacivil_ticketmaster[".closePopupAfterAdd"] = 1;
$tdatacivil_ticketmaster[".afterAddActionDetTable"] = "";

$tdatacivil_ticketmaster[".list"] = true;

$tdatacivil_ticketmaster[".view"] = true;

$tdatacivil_ticketmaster[".import"] = true;

$tdatacivil_ticketmaster[".exportTo"] = true;

$tdatacivil_ticketmaster[".printFriendly"] = true;

$tdatacivil_ticketmaster[".delete"] = true;

$tdatacivil_ticketmaster[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacivil_ticketmaster[".searchSaving"] = false;
//

$tdatacivil_ticketmaster[".showSearchPanel"] = true;
		$tdatacivil_ticketmaster[".flexibleSearch"] = true;

$tdatacivil_ticketmaster[".isUseAjaxSuggest"] = true;

$tdatacivil_ticketmaster[".rowHighlite"] = true;



$tdatacivil_ticketmaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacivil_ticketmaster[".isUseTimeForSearch"] = false;



$tdatacivil_ticketmaster[".badgeColor"] = "9acd32";


$tdatacivil_ticketmaster[".allSearchFields"] = array();
$tdatacivil_ticketmaster[".filterFields"] = array();
$tdatacivil_ticketmaster[".requiredSearchFields"] = array();

$tdatacivil_ticketmaster[".allSearchFields"][] = "ticketid";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "emp_id";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "defect_id";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "problem";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "assign";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "createdate";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "solvedate";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "status";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "ipaddress";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "priority";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "remark";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "nameofperson";
	$tdatacivil_ticketmaster[".allSearchFields"][] = "ext";
	

$tdatacivil_ticketmaster[".googleLikeFields"] = array();
$tdatacivil_ticketmaster[".googleLikeFields"][] = "ticketid";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "emp_id";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "defect_id";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "problem";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "assign";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "createdate";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "solvedate";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "status";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "priority";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "remark";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".googleLikeFields"][] = "ext";


$tdatacivil_ticketmaster[".advSearchFields"] = array();
$tdatacivil_ticketmaster[".advSearchFields"][] = "ticketid";
$tdatacivil_ticketmaster[".advSearchFields"][] = "emp_id";
$tdatacivil_ticketmaster[".advSearchFields"][] = "defect_id";
$tdatacivil_ticketmaster[".advSearchFields"][] = "problem";
$tdatacivil_ticketmaster[".advSearchFields"][] = "assign";
$tdatacivil_ticketmaster[".advSearchFields"][] = "createdate";
$tdatacivil_ticketmaster[".advSearchFields"][] = "solvedate";
$tdatacivil_ticketmaster[".advSearchFields"][] = "status";
$tdatacivil_ticketmaster[".advSearchFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".advSearchFields"][] = "priority";
$tdatacivil_ticketmaster[".advSearchFields"][] = "remark";
$tdatacivil_ticketmaster[".advSearchFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".advSearchFields"][] = "ext";

$tdatacivil_ticketmaster[".tableType"] = "list";

$tdatacivil_ticketmaster[".printerPageOrientation"] = 0;
$tdatacivil_ticketmaster[".nPrinterPageScale"] = 100;

$tdatacivil_ticketmaster[".nPrinterSplitRecords"] = 40;

$tdatacivil_ticketmaster[".nPrinterPDFSplitRecords"] = 40;



$tdatacivil_ticketmaster[".geocodingEnabled"] = false;





$tdatacivil_ticketmaster[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacivil_ticketmaster[".pageSize"] = 20;

$tdatacivil_ticketmaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacivil_ticketmaster[".strOrderBy"] = $tstrOrderBy;

$tdatacivil_ticketmaster[".orderindexes"] = array();

$tdatacivil_ticketmaster[".sqlHead"] = "SELECT ticketid,  	emp_id,  	defect_id,  	problem,  	assign,  	createdate,  	solvedate,  	status,  	ipaddress,  	priority,  	remark,  	nameofperson,  	ext";
$tdatacivil_ticketmaster[".sqlFrom"] = "FROM civil_ticketmaster";
$tdatacivil_ticketmaster[".sqlWhereExpr"] = "";
$tdatacivil_ticketmaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacivil_ticketmaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacivil_ticketmaster[".arrGroupsPerPage"] = $arrGPP;

$tdatacivil_ticketmaster[".highlightSearchResults"] = true;

$tableKeyscivil_ticketmaster = array();
$tableKeyscivil_ticketmaster[] = "ticketid";
$tdatacivil_ticketmaster[".Keys"] = $tableKeyscivil_ticketmaster;

$tdatacivil_ticketmaster[".listFields"] = array();
$tdatacivil_ticketmaster[".listFields"][] = "ticketid";
$tdatacivil_ticketmaster[".listFields"][] = "emp_id";
$tdatacivil_ticketmaster[".listFields"][] = "defect_id";
$tdatacivil_ticketmaster[".listFields"][] = "problem";
$tdatacivil_ticketmaster[".listFields"][] = "assign";
$tdatacivil_ticketmaster[".listFields"][] = "createdate";
$tdatacivil_ticketmaster[".listFields"][] = "solvedate";
$tdatacivil_ticketmaster[".listFields"][] = "status";
$tdatacivil_ticketmaster[".listFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".listFields"][] = "priority";
$tdatacivil_ticketmaster[".listFields"][] = "remark";
$tdatacivil_ticketmaster[".listFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".listFields"][] = "ext";

$tdatacivil_ticketmaster[".hideMobileList"] = array();


$tdatacivil_ticketmaster[".viewFields"] = array();
$tdatacivil_ticketmaster[".viewFields"][] = "ticketid";
$tdatacivil_ticketmaster[".viewFields"][] = "emp_id";
$tdatacivil_ticketmaster[".viewFields"][] = "defect_id";
$tdatacivil_ticketmaster[".viewFields"][] = "problem";
$tdatacivil_ticketmaster[".viewFields"][] = "assign";
$tdatacivil_ticketmaster[".viewFields"][] = "createdate";
$tdatacivil_ticketmaster[".viewFields"][] = "solvedate";
$tdatacivil_ticketmaster[".viewFields"][] = "status";
$tdatacivil_ticketmaster[".viewFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".viewFields"][] = "priority";
$tdatacivil_ticketmaster[".viewFields"][] = "remark";
$tdatacivil_ticketmaster[".viewFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".viewFields"][] = "ext";

$tdatacivil_ticketmaster[".addFields"] = array();
$tdatacivil_ticketmaster[".addFields"][] = "emp_id";
$tdatacivil_ticketmaster[".addFields"][] = "defect_id";
$tdatacivil_ticketmaster[".addFields"][] = "problem";
$tdatacivil_ticketmaster[".addFields"][] = "assign";
$tdatacivil_ticketmaster[".addFields"][] = "createdate";
$tdatacivil_ticketmaster[".addFields"][] = "solvedate";
$tdatacivil_ticketmaster[".addFields"][] = "status";
$tdatacivil_ticketmaster[".addFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".addFields"][] = "priority";
$tdatacivil_ticketmaster[".addFields"][] = "remark";
$tdatacivil_ticketmaster[".addFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".addFields"][] = "ext";

$tdatacivil_ticketmaster[".masterListFields"] = array();
$tdatacivil_ticketmaster[".masterListFields"][] = "ticketid";
$tdatacivil_ticketmaster[".masterListFields"][] = "emp_id";
$tdatacivil_ticketmaster[".masterListFields"][] = "defect_id";
$tdatacivil_ticketmaster[".masterListFields"][] = "problem";
$tdatacivil_ticketmaster[".masterListFields"][] = "assign";
$tdatacivil_ticketmaster[".masterListFields"][] = "createdate";
$tdatacivil_ticketmaster[".masterListFields"][] = "solvedate";
$tdatacivil_ticketmaster[".masterListFields"][] = "status";
$tdatacivil_ticketmaster[".masterListFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".masterListFields"][] = "priority";
$tdatacivil_ticketmaster[".masterListFields"][] = "remark";
$tdatacivil_ticketmaster[".masterListFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".masterListFields"][] = "ext";

$tdatacivil_ticketmaster[".inlineAddFields"] = array();
$tdatacivil_ticketmaster[".inlineAddFields"][] = "emp_id";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "defect_id";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "problem";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "assign";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "createdate";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "solvedate";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "status";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "priority";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "remark";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".inlineAddFields"][] = "ext";

$tdatacivil_ticketmaster[".editFields"] = array();
$tdatacivil_ticketmaster[".editFields"][] = "emp_id";
$tdatacivil_ticketmaster[".editFields"][] = "defect_id";
$tdatacivil_ticketmaster[".editFields"][] = "problem";
$tdatacivil_ticketmaster[".editFields"][] = "assign";
$tdatacivil_ticketmaster[".editFields"][] = "createdate";
$tdatacivil_ticketmaster[".editFields"][] = "solvedate";
$tdatacivil_ticketmaster[".editFields"][] = "status";
$tdatacivil_ticketmaster[".editFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".editFields"][] = "priority";
$tdatacivil_ticketmaster[".editFields"][] = "remark";
$tdatacivil_ticketmaster[".editFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".editFields"][] = "ext";

$tdatacivil_ticketmaster[".inlineEditFields"] = array();
$tdatacivil_ticketmaster[".inlineEditFields"][] = "emp_id";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "defect_id";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "problem";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "assign";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "createdate";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "solvedate";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "status";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "priority";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "remark";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".inlineEditFields"][] = "ext";

$tdatacivil_ticketmaster[".exportFields"] = array();
$tdatacivil_ticketmaster[".exportFields"][] = "ticketid";
$tdatacivil_ticketmaster[".exportFields"][] = "emp_id";
$tdatacivil_ticketmaster[".exportFields"][] = "defect_id";
$tdatacivil_ticketmaster[".exportFields"][] = "problem";
$tdatacivil_ticketmaster[".exportFields"][] = "assign";
$tdatacivil_ticketmaster[".exportFields"][] = "createdate";
$tdatacivil_ticketmaster[".exportFields"][] = "solvedate";
$tdatacivil_ticketmaster[".exportFields"][] = "status";
$tdatacivil_ticketmaster[".exportFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".exportFields"][] = "priority";
$tdatacivil_ticketmaster[".exportFields"][] = "remark";
$tdatacivil_ticketmaster[".exportFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".exportFields"][] = "ext";

$tdatacivil_ticketmaster[".importFields"] = array();
$tdatacivil_ticketmaster[".importFields"][] = "ticketid";
$tdatacivil_ticketmaster[".importFields"][] = "emp_id";
$tdatacivil_ticketmaster[".importFields"][] = "defect_id";
$tdatacivil_ticketmaster[".importFields"][] = "problem";
$tdatacivil_ticketmaster[".importFields"][] = "assign";
$tdatacivil_ticketmaster[".importFields"][] = "createdate";
$tdatacivil_ticketmaster[".importFields"][] = "solvedate";
$tdatacivil_ticketmaster[".importFields"][] = "status";
$tdatacivil_ticketmaster[".importFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".importFields"][] = "priority";
$tdatacivil_ticketmaster[".importFields"][] = "remark";
$tdatacivil_ticketmaster[".importFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".importFields"][] = "ext";

$tdatacivil_ticketmaster[".printFields"] = array();
$tdatacivil_ticketmaster[".printFields"][] = "ticketid";
$tdatacivil_ticketmaster[".printFields"][] = "emp_id";
$tdatacivil_ticketmaster[".printFields"][] = "defect_id";
$tdatacivil_ticketmaster[".printFields"][] = "problem";
$tdatacivil_ticketmaster[".printFields"][] = "assign";
$tdatacivil_ticketmaster[".printFields"][] = "createdate";
$tdatacivil_ticketmaster[".printFields"][] = "solvedate";
$tdatacivil_ticketmaster[".printFields"][] = "status";
$tdatacivil_ticketmaster[".printFields"][] = "ipaddress";
$tdatacivil_ticketmaster[".printFields"][] = "priority";
$tdatacivil_ticketmaster[".printFields"][] = "remark";
$tdatacivil_ticketmaster[".printFields"][] = "nameofperson";
$tdatacivil_ticketmaster[".printFields"][] = "ext";

//	ticketid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ticketid";
	$fdata["GoodName"] = "ticketid";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","ticketid");
	$fdata["FieldType"] = 3;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["ticketid"] = $fdata;
//	emp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "emp_id";
	$fdata["GoodName"] = "emp_id";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","emp_id");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["emp_id"] = $fdata;
//	defect_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "defect_id";
	$fdata["GoodName"] = "defect_id";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","defect_id");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["defect_id"] = $fdata;
//	problem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "problem";
	$fdata["GoodName"] = "problem";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","problem");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["problem"] = $fdata;
//	assign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "assign";
	$fdata["GoodName"] = "assign";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","assign");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["assign"] = $fdata;
//	createdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "createdate";
	$fdata["GoodName"] = "createdate";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","createdate");
	$fdata["FieldType"] = 135;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacivil_ticketmaster["createdate"] = $fdata;
//	solvedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "solvedate";
	$fdata["GoodName"] = "solvedate";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","solvedate");
	$fdata["FieldType"] = 135;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacivil_ticketmaster["solvedate"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","status");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["status"] = $fdata;
//	ipaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ipaddress";
	$fdata["GoodName"] = "ipaddress";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","ipaddress");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["ipaddress"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","priority");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["priority"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["remark"] = $fdata;
//	nameofperson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nameofperson";
	$fdata["GoodName"] = "nameofperson";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","nameofperson");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["nameofperson"] = $fdata;
//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "civil_ticketmaster";
	$fdata["Label"] = GetFieldLabel("civil_ticketmaster","ext");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacivil_ticketmaster["ext"] = $fdata;


$tables_data["civil_ticketmaster"]=&$tdatacivil_ticketmaster;
$field_labels["civil_ticketmaster"] = &$fieldLabelscivil_ticketmaster;
$fieldToolTips["civil_ticketmaster"] = &$fieldToolTipscivil_ticketmaster;
$page_titles["civil_ticketmaster"] = &$pageTitlescivil_ticketmaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["civil_ticketmaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["civil_ticketmaster"] = array();


	
				$strOriginalDetailsTable="civil_ticketremarks";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="civil_ticketremarks";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "civil_ticketremarks";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
				$masterParams["dispMasterInfo"][PAGE_VIEW] = true;
	
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["civil_ticketmaster"][0] = $masterParams;
				$masterTablesData["civil_ticketmaster"][0]["masterKeys"] = array();
	$masterTablesData["civil_ticketmaster"][0]["masterKeys"][]="ticketid";
				$masterTablesData["civil_ticketmaster"][0]["detailKeys"] = array();
	$masterTablesData["civil_ticketmaster"][0]["detailKeys"][]="ticketid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_civil_ticketmaster()
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
	"m_srcTableName" => "civil_ticketmaster"
));

$proto6["m_sql"] = "ticketid";
$proto6["m_srcTableName"] = "civil_ticketmaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "emp_id",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto8["m_sql"] = "emp_id";
$proto8["m_srcTableName"] = "civil_ticketmaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "defect_id",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto10["m_sql"] = "defect_id";
$proto10["m_srcTableName"] = "civil_ticketmaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "problem",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto12["m_sql"] = "problem";
$proto12["m_srcTableName"] = "civil_ticketmaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "assign",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto14["m_sql"] = "assign";
$proto14["m_srcTableName"] = "civil_ticketmaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "createdate",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto16["m_sql"] = "createdate";
$proto16["m_srcTableName"] = "civil_ticketmaster";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "solvedate",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto18["m_sql"] = "solvedate";
$proto18["m_srcTableName"] = "civil_ticketmaster";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto20["m_sql"] = "status";
$proto20["m_srcTableName"] = "civil_ticketmaster";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ipaddress",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto22["m_sql"] = "ipaddress";
$proto22["m_srcTableName"] = "civil_ticketmaster";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto24["m_sql"] = "priority";
$proto24["m_srcTableName"] = "civil_ticketmaster";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto26["m_sql"] = "remark";
$proto26["m_srcTableName"] = "civil_ticketmaster";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "nameofperson",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto28["m_sql"] = "nameofperson";
$proto28["m_srcTableName"] = "civil_ticketmaster";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ext",
	"m_strTable" => "civil_ticketmaster",
	"m_srcTableName" => "civil_ticketmaster"
));

$proto30["m_sql"] = "ext";
$proto30["m_srcTableName"] = "civil_ticketmaster";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "civil_ticketmaster";
$proto33["m_srcTableName"] = "civil_ticketmaster";
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
$proto32["m_srcTableName"] = "civil_ticketmaster";
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
$proto0["m_srcTableName"]="civil_ticketmaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_civil_ticketmaster = createSqlQuery_civil_ticketmaster();


	
		;

													

$tdatacivil_ticketmaster[".sqlquery"] = $queryData_civil_ticketmaster;

$tableEvents["civil_ticketmaster"] = new eventsBase;
$tdatacivil_ticketmaster[".hasEvents"] = false;

?>