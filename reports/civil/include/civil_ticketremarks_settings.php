<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacivil_ticketremarks = array();
	$tdatacivil_ticketremarks[".truncateText"] = true;
	$tdatacivil_ticketremarks[".NumberOfChars"] = 80;
	$tdatacivil_ticketremarks[".ShortName"] = "civil_ticketremarks";
	$tdatacivil_ticketremarks[".OwnerID"] = "";
	$tdatacivil_ticketremarks[".OriginalTable"] = "civil_ticketremarks";

//	field labels
$fieldLabelscivil_ticketremarks = array();
$fieldToolTipscivil_ticketremarks = array();
$pageTitlescivil_ticketremarks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscivil_ticketremarks["English"] = array();
	$fieldToolTipscivil_ticketremarks["English"] = array();
	$pageTitlescivil_ticketremarks["English"] = array();
	$fieldLabelscivil_ticketremarks["English"]["remarkid"] = "Remarkid";
	$fieldToolTipscivil_ticketremarks["English"]["remarkid"] = "";
	$fieldLabelscivil_ticketremarks["English"]["ticketid"] = "Ticketid";
	$fieldToolTipscivil_ticketremarks["English"]["ticketid"] = "";
	$fieldLabelscivil_ticketremarks["English"]["remark"] = "Remark";
	$fieldToolTipscivil_ticketremarks["English"]["remark"] = "";
	$fieldLabelscivil_ticketremarks["English"]["remakdate"] = "Remakdate";
	$fieldToolTipscivil_ticketremarks["English"]["remakdate"] = "";
	$fieldLabelscivil_ticketremarks["English"]["remarkby"] = "Remarkby";
	$fieldToolTipscivil_ticketremarks["English"]["remarkby"] = "";
	$fieldLabelscivil_ticketremarks["English"]["ipaddress"] = "Ipaddress";
	$fieldToolTipscivil_ticketremarks["English"]["ipaddress"] = "";
	if (count($fieldToolTipscivil_ticketremarks["English"]))
		$tdatacivil_ticketremarks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscivil_ticketremarks[""] = array();
	$fieldToolTipscivil_ticketremarks[""] = array();
	$pageTitlescivil_ticketremarks[""] = array();
	if (count($fieldToolTipscivil_ticketremarks[""]))
		$tdatacivil_ticketremarks[".isUseToolTips"] = true;
}


	$tdatacivil_ticketremarks[".NCSearch"] = true;



$tdatacivil_ticketremarks[".shortTableName"] = "civil_ticketremarks";
$tdatacivil_ticketremarks[".nSecOptions"] = 0;
$tdatacivil_ticketremarks[".recsPerRowPrint"] = 1;
$tdatacivil_ticketremarks[".mainTableOwnerID"] = "";
$tdatacivil_ticketremarks[".moveNext"] = 1;
$tdatacivil_ticketremarks[".entityType"] = 0;

$tdatacivil_ticketremarks[".strOriginalTableName"] = "civil_ticketremarks";

	



$tdatacivil_ticketremarks[".showAddInPopup"] = false;

$tdatacivil_ticketremarks[".showEditInPopup"] = false;

$tdatacivil_ticketremarks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacivil_ticketremarks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacivil_ticketremarks[".fieldsForRegister"] = array();

$tdatacivil_ticketremarks[".listAjax"] = false;

	$tdatacivil_ticketremarks[".audit"] = false;

	$tdatacivil_ticketremarks[".locking"] = false;

$tdatacivil_ticketremarks[".edit"] = true;
$tdatacivil_ticketremarks[".afterEditAction"] = 1;
$tdatacivil_ticketremarks[".closePopupAfterEdit"] = 1;
$tdatacivil_ticketremarks[".afterEditActionDetTable"] = "";

$tdatacivil_ticketremarks[".add"] = true;
$tdatacivil_ticketremarks[".afterAddAction"] = 1;
$tdatacivil_ticketremarks[".closePopupAfterAdd"] = 1;
$tdatacivil_ticketremarks[".afterAddActionDetTable"] = "";

$tdatacivil_ticketremarks[".list"] = true;

$tdatacivil_ticketremarks[".view"] = true;

$tdatacivil_ticketremarks[".import"] = true;

$tdatacivil_ticketremarks[".exportTo"] = true;

$tdatacivil_ticketremarks[".printFriendly"] = true;

$tdatacivil_ticketremarks[".delete"] = true;

$tdatacivil_ticketremarks[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacivil_ticketremarks[".searchSaving"] = false;
//

$tdatacivil_ticketremarks[".showSearchPanel"] = true;
		$tdatacivil_ticketremarks[".flexibleSearch"] = true;

$tdatacivil_ticketremarks[".isUseAjaxSuggest"] = true;

$tdatacivil_ticketremarks[".rowHighlite"] = true;



$tdatacivil_ticketremarks[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacivil_ticketremarks[".isUseTimeForSearch"] = false;



$tdatacivil_ticketremarks[".badgeColor"] = "7b68ee";


$tdatacivil_ticketremarks[".allSearchFields"] = array();
$tdatacivil_ticketremarks[".filterFields"] = array();
$tdatacivil_ticketremarks[".requiredSearchFields"] = array();

$tdatacivil_ticketremarks[".allSearchFields"][] = "remarkid";
	$tdatacivil_ticketremarks[".allSearchFields"][] = "ticketid";
	$tdatacivil_ticketremarks[".allSearchFields"][] = "remark";
	$tdatacivil_ticketremarks[".allSearchFields"][] = "remakdate";
	$tdatacivil_ticketremarks[".allSearchFields"][] = "remarkby";
	$tdatacivil_ticketremarks[".allSearchFields"][] = "ipaddress";
	

$tdatacivil_ticketremarks[".googleLikeFields"] = array();
$tdatacivil_ticketremarks[".googleLikeFields"][] = "remarkid";
$tdatacivil_ticketremarks[".googleLikeFields"][] = "ticketid";
$tdatacivil_ticketremarks[".googleLikeFields"][] = "remark";
$tdatacivil_ticketremarks[".googleLikeFields"][] = "remakdate";
$tdatacivil_ticketremarks[".googleLikeFields"][] = "remarkby";
$tdatacivil_ticketremarks[".googleLikeFields"][] = "ipaddress";


$tdatacivil_ticketremarks[".advSearchFields"] = array();
$tdatacivil_ticketremarks[".advSearchFields"][] = "remarkid";
$tdatacivil_ticketremarks[".advSearchFields"][] = "ticketid";
$tdatacivil_ticketremarks[".advSearchFields"][] = "remark";
$tdatacivil_ticketremarks[".advSearchFields"][] = "remakdate";
$tdatacivil_ticketremarks[".advSearchFields"][] = "remarkby";
$tdatacivil_ticketremarks[".advSearchFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".tableType"] = "list";

$tdatacivil_ticketremarks[".printerPageOrientation"] = 0;
$tdatacivil_ticketremarks[".nPrinterPageScale"] = 100;

$tdatacivil_ticketremarks[".nPrinterSplitRecords"] = 40;

$tdatacivil_ticketremarks[".nPrinterPDFSplitRecords"] = 40;



$tdatacivil_ticketremarks[".geocodingEnabled"] = false;





$tdatacivil_ticketremarks[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacivil_ticketremarks[".pageSize"] = 20;

$tdatacivil_ticketremarks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacivil_ticketremarks[".strOrderBy"] = $tstrOrderBy;

$tdatacivil_ticketremarks[".orderindexes"] = array();

$tdatacivil_ticketremarks[".sqlHead"] = "SELECT remarkid,  	ticketid,  	remark,  	remakdate,  	remarkby,  	ipaddress";
$tdatacivil_ticketremarks[".sqlFrom"] = "FROM civil_ticketremarks";
$tdatacivil_ticketremarks[".sqlWhereExpr"] = "";
$tdatacivil_ticketremarks[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacivil_ticketremarks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacivil_ticketremarks[".arrGroupsPerPage"] = $arrGPP;

$tdatacivil_ticketremarks[".highlightSearchResults"] = true;

$tableKeyscivil_ticketremarks = array();
$tableKeyscivil_ticketremarks[] = "remarkid";
$tdatacivil_ticketremarks[".Keys"] = $tableKeyscivil_ticketremarks;

$tdatacivil_ticketremarks[".listFields"] = array();
$tdatacivil_ticketremarks[".listFields"][] = "remarkid";
$tdatacivil_ticketremarks[".listFields"][] = "ticketid";
$tdatacivil_ticketremarks[".listFields"][] = "remark";
$tdatacivil_ticketremarks[".listFields"][] = "remakdate";
$tdatacivil_ticketremarks[".listFields"][] = "remarkby";
$tdatacivil_ticketremarks[".listFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".hideMobileList"] = array();


$tdatacivil_ticketremarks[".viewFields"] = array();
$tdatacivil_ticketremarks[".viewFields"][] = "remarkid";
$tdatacivil_ticketremarks[".viewFields"][] = "ticketid";
$tdatacivil_ticketremarks[".viewFields"][] = "remark";
$tdatacivil_ticketremarks[".viewFields"][] = "remakdate";
$tdatacivil_ticketremarks[".viewFields"][] = "remarkby";
$tdatacivil_ticketremarks[".viewFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".addFields"] = array();
$tdatacivil_ticketremarks[".addFields"][] = "ticketid";
$tdatacivil_ticketremarks[".addFields"][] = "remark";
$tdatacivil_ticketremarks[".addFields"][] = "remakdate";
$tdatacivil_ticketremarks[".addFields"][] = "remarkby";
$tdatacivil_ticketremarks[".addFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".masterListFields"] = array();
$tdatacivil_ticketremarks[".masterListFields"][] = "remarkid";
$tdatacivil_ticketremarks[".masterListFields"][] = "ticketid";
$tdatacivil_ticketremarks[".masterListFields"][] = "remark";
$tdatacivil_ticketremarks[".masterListFields"][] = "remakdate";
$tdatacivil_ticketremarks[".masterListFields"][] = "remarkby";
$tdatacivil_ticketremarks[".masterListFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".inlineAddFields"] = array();
$tdatacivil_ticketremarks[".inlineAddFields"][] = "ticketid";
$tdatacivil_ticketremarks[".inlineAddFields"][] = "remark";
$tdatacivil_ticketremarks[".inlineAddFields"][] = "remakdate";
$tdatacivil_ticketremarks[".inlineAddFields"][] = "remarkby";
$tdatacivil_ticketremarks[".inlineAddFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".editFields"] = array();
$tdatacivil_ticketremarks[".editFields"][] = "ticketid";
$tdatacivil_ticketremarks[".editFields"][] = "remark";
$tdatacivil_ticketremarks[".editFields"][] = "remakdate";
$tdatacivil_ticketremarks[".editFields"][] = "remarkby";
$tdatacivil_ticketremarks[".editFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".inlineEditFields"] = array();
$tdatacivil_ticketremarks[".inlineEditFields"][] = "ticketid";
$tdatacivil_ticketremarks[".inlineEditFields"][] = "remark";
$tdatacivil_ticketremarks[".inlineEditFields"][] = "remakdate";
$tdatacivil_ticketremarks[".inlineEditFields"][] = "remarkby";
$tdatacivil_ticketremarks[".inlineEditFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".exportFields"] = array();
$tdatacivil_ticketremarks[".exportFields"][] = "remarkid";
$tdatacivil_ticketremarks[".exportFields"][] = "ticketid";
$tdatacivil_ticketremarks[".exportFields"][] = "remark";
$tdatacivil_ticketremarks[".exportFields"][] = "remakdate";
$tdatacivil_ticketremarks[".exportFields"][] = "remarkby";
$tdatacivil_ticketremarks[".exportFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".importFields"] = array();
$tdatacivil_ticketremarks[".importFields"][] = "remarkid";
$tdatacivil_ticketremarks[".importFields"][] = "ticketid";
$tdatacivil_ticketremarks[".importFields"][] = "remark";
$tdatacivil_ticketremarks[".importFields"][] = "remakdate";
$tdatacivil_ticketremarks[".importFields"][] = "remarkby";
$tdatacivil_ticketremarks[".importFields"][] = "ipaddress";

$tdatacivil_ticketremarks[".printFields"] = array();
$tdatacivil_ticketremarks[".printFields"][] = "remarkid";
$tdatacivil_ticketremarks[".printFields"][] = "ticketid";
$tdatacivil_ticketremarks[".printFields"][] = "remark";
$tdatacivil_ticketremarks[".printFields"][] = "remakdate";
$tdatacivil_ticketremarks[".printFields"][] = "remarkby";
$tdatacivil_ticketremarks[".printFields"][] = "ipaddress";

//	remarkid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "remarkid";
	$fdata["GoodName"] = "remarkid";
	$fdata["ownerTable"] = "civil_ticketremarks";
	$fdata["Label"] = GetFieldLabel("civil_ticketremarks","remarkid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remarkid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarkid";

	
	
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




	$tdatacivil_ticketremarks["remarkid"] = $fdata;
//	ticketid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ticketid";
	$fdata["GoodName"] = "ticketid";
	$fdata["ownerTable"] = "civil_ticketremarks";
	$fdata["Label"] = GetFieldLabel("civil_ticketremarks","ticketid");
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




	$tdatacivil_ticketremarks["ticketid"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "civil_ticketremarks";
	$fdata["Label"] = GetFieldLabel("civil_ticketremarks","remark");
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




	$tdatacivil_ticketremarks["remark"] = $fdata;
//	remakdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "remakdate";
	$fdata["GoodName"] = "remakdate";
	$fdata["ownerTable"] = "civil_ticketremarks";
	$fdata["Label"] = GetFieldLabel("civil_ticketremarks","remakdate");
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

		$fdata["strField"] = "remakdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remakdate";

	
	
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




	$tdatacivil_ticketremarks["remakdate"] = $fdata;
//	remarkby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remarkby";
	$fdata["GoodName"] = "remarkby";
	$fdata["ownerTable"] = "civil_ticketremarks";
	$fdata["Label"] = GetFieldLabel("civil_ticketremarks","remarkby");
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

		$fdata["strField"] = "remarkby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarkby";

	
	
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




	$tdatacivil_ticketremarks["remarkby"] = $fdata;
//	ipaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ipaddress";
	$fdata["GoodName"] = "ipaddress";
	$fdata["ownerTable"] = "civil_ticketremarks";
	$fdata["Label"] = GetFieldLabel("civil_ticketremarks","ipaddress");
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdatacivil_ticketremarks["ipaddress"] = $fdata;


$tables_data["civil_ticketremarks"]=&$tdatacivil_ticketremarks;
$field_labels["civil_ticketremarks"] = &$fieldLabelscivil_ticketremarks;
$fieldToolTips["civil_ticketremarks"] = &$fieldToolTipscivil_ticketremarks;
$page_titles["civil_ticketremarks"] = &$pageTitlescivil_ticketremarks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["civil_ticketremarks"] = array();
//	civil_ticketmaster
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="civil_ticketmaster";
		$detailsParam["dOriginalTable"] = "civil_ticketmaster";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "civil_ticketmaster";
	$detailsParam["dCaptionTable"] = GetTableCaption("civil_ticketmaster");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["civil_ticketremarks"][$dIndex] = $detailsParam;

	
		$detailsTablesData["civil_ticketremarks"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["civil_ticketremarks"][$dIndex]["masterKeys"][]="ticketid";

				$detailsTablesData["civil_ticketremarks"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["civil_ticketremarks"][$dIndex]["detailKeys"][]="ticketid";

// tables which are master tables for current table (detail)
$masterTablesData["civil_ticketremarks"] = array();


	
				$strOriginalDetailsTable="civil_ticketmaster";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="civil_ticketmaster Report";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "civil_ticketmaster_Report";
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
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["civil_ticketremarks"][0] = $masterParams;
				$masterTablesData["civil_ticketremarks"][0]["masterKeys"] = array();
	$masterTablesData["civil_ticketremarks"][0]["masterKeys"][]="ticketid";
				$masterTablesData["civil_ticketremarks"][0]["detailKeys"] = array();
	$masterTablesData["civil_ticketremarks"][0]["detailKeys"][]="ticketid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_civil_ticketremarks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "remarkid,  	ticketid,  	remark,  	remakdate,  	remarkby,  	ipaddress";
$proto0["m_strFrom"] = "FROM civil_ticketremarks";
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
	"m_strName" => "remarkid",
	"m_strTable" => "civil_ticketremarks",
	"m_srcTableName" => "civil_ticketremarks"
));

$proto6["m_sql"] = "remarkid";
$proto6["m_srcTableName"] = "civil_ticketremarks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketid",
	"m_strTable" => "civil_ticketremarks",
	"m_srcTableName" => "civil_ticketremarks"
));

$proto8["m_sql"] = "ticketid";
$proto8["m_srcTableName"] = "civil_ticketremarks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "civil_ticketremarks",
	"m_srcTableName" => "civil_ticketremarks"
));

$proto10["m_sql"] = "remark";
$proto10["m_srcTableName"] = "civil_ticketremarks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "remakdate",
	"m_strTable" => "civil_ticketremarks",
	"m_srcTableName" => "civil_ticketremarks"
));

$proto12["m_sql"] = "remakdate";
$proto12["m_srcTableName"] = "civil_ticketremarks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "remarkby",
	"m_strTable" => "civil_ticketremarks",
	"m_srcTableName" => "civil_ticketremarks"
));

$proto14["m_sql"] = "remarkby";
$proto14["m_srcTableName"] = "civil_ticketremarks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ipaddress",
	"m_strTable" => "civil_ticketremarks",
	"m_srcTableName" => "civil_ticketremarks"
));

$proto16["m_sql"] = "ipaddress";
$proto16["m_srcTableName"] = "civil_ticketremarks";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "civil_ticketremarks";
$proto19["m_srcTableName"] = "civil_ticketremarks";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "remarkid";
$proto19["m_columns"][] = "ticketid";
$proto19["m_columns"][] = "remark";
$proto19["m_columns"][] = "remakdate";
$proto19["m_columns"][] = "remarkby";
$proto19["m_columns"][] = "ipaddress";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "civil_ticketremarks";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "civil_ticketremarks";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="civil_ticketremarks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_civil_ticketremarks = createSqlQuery_civil_ticketremarks();


	
		;

						

$tdatacivil_ticketremarks[".sqlquery"] = $queryData_civil_ticketremarks;

$tableEvents["civil_ticketremarks"] = new eventsBase;
$tdatacivil_ticketremarks[".hasEvents"] = false;

?>