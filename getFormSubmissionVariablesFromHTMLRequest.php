<?php

namespace CustomRayGuns;

//This function is run when the user submits the POST variable ['crg-info-form']
function getFormSubmissionVariablesFromHTMLRequest(){
	$listOfPostFieldNames = array();
	
	foreach (array_keys($_POST) as $fieldName){
		$listOfPostFieldNames[$fieldName] = $_POST[$fieldName];
	}	
	return $listOfPostFieldNames;
}

function getFormSubmissionVariablesFromHTMLRequestTEST(){
	$listOfPostFieldNames = array();
	
	foreach (array_keys($_POST) as $fieldName){
		$listOfPostFieldNames[$fieldName] = $_POST[$fieldName];
		echo $fieldName . "  - <br />";
	}	
	var_dump($listOfPostFieldNames);die();
	return $listOfPostFieldNames;
}
