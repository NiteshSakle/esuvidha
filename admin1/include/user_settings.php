<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser = array();
	$tdatauser[".truncateText"] = true;
	$tdatauser[".NumberOfChars"] = 80;
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$pageTitlesuser["English"] = array();
	$fieldLabelsuser["English"]["emp_id"] = "Emp Id";
	$fieldToolTipsuser["English"]["emp_id"] = "";
	$fieldLabelsuser["English"]["sapid"] = "Sapid";
	$fieldToolTipsuser["English"]["sapid"] = "";
	$fieldLabelsuser["English"]["cpfno"] = "Cpfno";
	$fieldToolTipsuser["English"]["cpfno"] = "";
	$fieldLabelsuser["English"]["desig_id"] = "Desig Id";
	$fieldToolTipsuser["English"]["desig_id"] = "";
	$fieldLabelsuser["English"]["firstname"] = "Firstname";
	$fieldToolTipsuser["English"]["firstname"] = "";
	$fieldLabelsuser["English"]["quarterno"] = "Quarterno";
	$fieldToolTipsuser["English"]["quarterno"] = "";
	$fieldLabelsuser["English"]["mobileno"] = "Mobileno";
	$fieldToolTipsuser["English"]["mobileno"] = "";
	$fieldLabelsuser["English"]["email"] = "Email";
	$fieldToolTipsuser["English"]["email"] = "";
	$fieldLabelsuser["English"]["password"] = "Password";
	$fieldToolTipsuser["English"]["password"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser[""] = array();
	$fieldToolTipsuser[""] = array();
	$pageTitlesuser[""] = array();
	if (count($fieldToolTipsuser[""]))
		$tdatauser[".isUseToolTips"] = true;
}


	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;
$tdatauser[".recsPerRowPrint"] = 1;
$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".moveNext"] = 1;
$tdatauser[".entityType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";

	



$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser[".fieldsForRegister"] = array();

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;

$tdatauser[".edit"] = true;
$tdatauser[".afterEditAction"] = 1;
$tdatauser[".closePopupAfterEdit"] = 1;
$tdatauser[".afterEditActionDetTable"] = "";

$tdatauser[".add"] = true;
$tdatauser[".afterAddAction"] = 1;
$tdatauser[".closePopupAfterAdd"] = 1;
$tdatauser[".afterAddActionDetTable"] = "";

$tdatauser[".list"] = true;

$tdatauser[".inlineEdit"] = true;
$tdatauser[".inlineAdd"] = true;
$tdatauser[".copy"] = true;
$tdatauser[".view"] = true;

$tdatauser[".import"] = true;

$tdatauser[".exportTo"] = true;

$tdatauser[".printFriendly"] = true;

$tdatauser[".delete"] = true;

$tdatauser[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser[".searchSaving"] = false;
//

$tdatauser[".showSearchPanel"] = true;
		$tdatauser[".flexibleSearch"] = true;

$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;



$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;



$tdatauser[".badgeColor"] = "CFAE83";


$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "emp_id";
	$tdatauser[".allSearchFields"][] = "sapid";
	$tdatauser[".allSearchFields"][] = "cpfno";
	$tdatauser[".allSearchFields"][] = "desig_id";
	$tdatauser[".allSearchFields"][] = "firstname";
	$tdatauser[".allSearchFields"][] = "quarterno";
	$tdatauser[".allSearchFields"][] = "mobileno";
	

$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "emp_id";
$tdatauser[".googleLikeFields"][] = "sapid";
$tdatauser[".googleLikeFields"][] = "cpfno";
$tdatauser[".googleLikeFields"][] = "desig_id";
$tdatauser[".googleLikeFields"][] = "firstname";
$tdatauser[".googleLikeFields"][] = "quarterno";
$tdatauser[".googleLikeFields"][] = "mobileno";
$tdatauser[".googleLikeFields"][] = "email";
$tdatauser[".googleLikeFields"][] = "password";


$tdatauser[".advSearchFields"] = array();
$tdatauser[".advSearchFields"][] = "emp_id";
$tdatauser[".advSearchFields"][] = "sapid";
$tdatauser[".advSearchFields"][] = "cpfno";
$tdatauser[".advSearchFields"][] = "desig_id";
$tdatauser[".advSearchFields"][] = "firstname";
$tdatauser[".advSearchFields"][] = "quarterno";
$tdatauser[".advSearchFields"][] = "mobileno";
$tdatauser[".advSearchFields"][] = "email";
$tdatauser[".advSearchFields"][] = "password";

$tdatauser[".tableType"] = "list";

$tdatauser[".printerPageOrientation"] = 0;
$tdatauser[".nPrinterPageScale"] = 100;

$tdatauser[".nPrinterSplitRecords"] = 40;

$tdatauser[".nPrinterPDFSplitRecords"] = 40;



$tdatauser[".geocodingEnabled"] = false;





$tdatauser[".listGridLayout"] = 3;





// view page pdf
$tdatauser[".isViewPagePDF"] = true;
$tdatauser[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatauser[".isPrinterPagePDF"] = true;
$tdatauser[".nPrinterPagePDFScale"] = 100;


$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT emp_id,  sapid,  cpfno,  desig_id,  firstname,  quarterno,  mobileno,  email,  password";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tdatauser[".highlightSearchResults"] = true;

$tableKeysuser = array();
$tableKeysuser[] = "emp_id";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "emp_id";
$tdatauser[".listFields"][] = "sapid";
$tdatauser[".listFields"][] = "cpfno";
$tdatauser[".listFields"][] = "desig_id";
$tdatauser[".listFields"][] = "firstname";
$tdatauser[".listFields"][] = "quarterno";
$tdatauser[".listFields"][] = "mobileno";
$tdatauser[".listFields"][] = "email";
$tdatauser[".listFields"][] = "password";

$tdatauser[".hideMobileList"] = array();


$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "emp_id";
$tdatauser[".viewFields"][] = "sapid";
$tdatauser[".viewFields"][] = "cpfno";
$tdatauser[".viewFields"][] = "desig_id";
$tdatauser[".viewFields"][] = "firstname";
$tdatauser[".viewFields"][] = "quarterno";
$tdatauser[".viewFields"][] = "mobileno";
$tdatauser[".viewFields"][] = "email";
$tdatauser[".viewFields"][] = "password";

$tdatauser[".addFields"] = array();
$tdatauser[".addFields"][] = "sapid";
$tdatauser[".addFields"][] = "cpfno";
$tdatauser[".addFields"][] = "desig_id";
$tdatauser[".addFields"][] = "firstname";
$tdatauser[".addFields"][] = "quarterno";
$tdatauser[".addFields"][] = "mobileno";
$tdatauser[".addFields"][] = "email";
$tdatauser[".addFields"][] = "password";

$tdatauser[".masterListFields"] = array();
$tdatauser[".masterListFields"][] = "emp_id";
$tdatauser[".masterListFields"][] = "sapid";
$tdatauser[".masterListFields"][] = "cpfno";
$tdatauser[".masterListFields"][] = "desig_id";
$tdatauser[".masterListFields"][] = "firstname";
$tdatauser[".masterListFields"][] = "quarterno";
$tdatauser[".masterListFields"][] = "mobileno";
$tdatauser[".masterListFields"][] = "email";
$tdatauser[".masterListFields"][] = "password";

$tdatauser[".inlineAddFields"] = array();
$tdatauser[".inlineAddFields"][] = "sapid";
$tdatauser[".inlineAddFields"][] = "cpfno";
$tdatauser[".inlineAddFields"][] = "desig_id";
$tdatauser[".inlineAddFields"][] = "firstname";
$tdatauser[".inlineAddFields"][] = "quarterno";
$tdatauser[".inlineAddFields"][] = "mobileno";
$tdatauser[".inlineAddFields"][] = "email";
$tdatauser[".inlineAddFields"][] = "password";

$tdatauser[".editFields"] = array();
$tdatauser[".editFields"][] = "sapid";
$tdatauser[".editFields"][] = "cpfno";
$tdatauser[".editFields"][] = "desig_id";
$tdatauser[".editFields"][] = "firstname";
$tdatauser[".editFields"][] = "quarterno";
$tdatauser[".editFields"][] = "mobileno";
$tdatauser[".editFields"][] = "email";
$tdatauser[".editFields"][] = "password";

$tdatauser[".inlineEditFields"] = array();
$tdatauser[".inlineEditFields"][] = "sapid";
$tdatauser[".inlineEditFields"][] = "cpfno";
$tdatauser[".inlineEditFields"][] = "desig_id";
$tdatauser[".inlineEditFields"][] = "firstname";
$tdatauser[".inlineEditFields"][] = "quarterno";
$tdatauser[".inlineEditFields"][] = "mobileno";
$tdatauser[".inlineEditFields"][] = "email";
$tdatauser[".inlineEditFields"][] = "password";

$tdatauser[".exportFields"] = array();
$tdatauser[".exportFields"][] = "emp_id";
$tdatauser[".exportFields"][] = "sapid";
$tdatauser[".exportFields"][] = "cpfno";
$tdatauser[".exportFields"][] = "desig_id";
$tdatauser[".exportFields"][] = "firstname";
$tdatauser[".exportFields"][] = "quarterno";
$tdatauser[".exportFields"][] = "mobileno";
$tdatauser[".exportFields"][] = "email";
$tdatauser[".exportFields"][] = "password";

$tdatauser[".importFields"] = array();
$tdatauser[".importFields"][] = "emp_id";
$tdatauser[".importFields"][] = "sapid";
$tdatauser[".importFields"][] = "cpfno";
$tdatauser[".importFields"][] = "desig_id";
$tdatauser[".importFields"][] = "firstname";
$tdatauser[".importFields"][] = "quarterno";
$tdatauser[".importFields"][] = "mobileno";
$tdatauser[".importFields"][] = "email";
$tdatauser[".importFields"][] = "password";

$tdatauser[".printFields"] = array();
$tdatauser[".printFields"][] = "emp_id";
$tdatauser[".printFields"][] = "sapid";
$tdatauser[".printFields"][] = "cpfno";
$tdatauser[".printFields"][] = "desig_id";
$tdatauser[".printFields"][] = "firstname";
$tdatauser[".printFields"][] = "quarterno";
$tdatauser[".printFields"][] = "mobileno";
$tdatauser[".printFields"][] = "email";
$tdatauser[".printFields"][] = "password";

//	emp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "emp_id";
	$fdata["GoodName"] = "emp_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","emp_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
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




	$tdatauser["emp_id"] = $fdata;
//	sapid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sapid";
	$fdata["GoodName"] = "sapid";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","sapid");
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

		$fdata["strField"] = "sapid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sapid";

	
	
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




	$tdatauser["sapid"] = $fdata;
//	cpfno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cpfno";
	$fdata["GoodName"] = "cpfno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","cpfno");
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

		$fdata["strField"] = "cpfno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cpfno";

	
	
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




	$tdatauser["cpfno"] = $fdata;
//	desig_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "desig_id";
	$fdata["GoodName"] = "desig_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","desig_id");
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

		$fdata["strField"] = "desig_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "desig_id";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdatauser["desig_id"] = $fdata;
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","firstname");
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

		$fdata["strField"] = "firstname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstname";

	
	
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




	$tdatauser["firstname"] = $fdata;
//	quarterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "quarterno";
	$fdata["GoodName"] = "quarterno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","quarterno");
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

		$fdata["strField"] = "quarterno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quarterno";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatauser["quarterno"] = $fdata;
//	mobileno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mobileno";
	$fdata["GoodName"] = "mobileno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","mobileno");
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

		$fdata["strField"] = "mobileno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobileno";

	
	
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
			$edata["EditParams"].= " maxlength=13";

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




	$tdatauser["mobileno"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatauser["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatauser["password"] = $fdata;


$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;
$page_titles["user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "emp_id,  sapid,  cpfno,  desig_id,  firstname,  quarterno,  mobileno,  email,  password";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_strName" => "emp_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto6["m_sql"] = "emp_id";
$proto6["m_srcTableName"] = "user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sapid",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto8["m_sql"] = "sapid";
$proto8["m_srcTableName"] = "user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cpfno",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto10["m_sql"] = "cpfno";
$proto10["m_srcTableName"] = "user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "desig_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto12["m_sql"] = "desig_id";
$proto12["m_srcTableName"] = "user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto14["m_sql"] = "firstname";
$proto14["m_srcTableName"] = "user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "quarterno",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto16["m_sql"] = "quarterno";
$proto16["m_srcTableName"] = "user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mobileno",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto18["m_sql"] = "mobileno";
$proto18["m_srcTableName"] = "user";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto20["m_sql"] = "email";
$proto20["m_srcTableName"] = "user";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto22["m_sql"] = "password";
$proto22["m_srcTableName"] = "user";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "user";
$proto25["m_srcTableName"] = "user";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "emp_id";
$proto25["m_columns"][] = "sapid";
$proto25["m_columns"][] = "cpfno";
$proto25["m_columns"][] = "desig_id";
$proto25["m_columns"][] = "firstname";
$proto25["m_columns"][] = "lastname";
$proto25["m_columns"][] = "quarterno";
$proto25["m_columns"][] = "mobileno";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "password";
$proto25["m_columns"][] = "isActive";
$proto25["m_columns"][] = "privilege";
$proto25["m_columns"][] = "section";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`user`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "user";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();


	
		;

									

$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

?>