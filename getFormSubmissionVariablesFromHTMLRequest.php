<?php

namespace CustomRayGuns;

//This function returns an array with fieldnames and values from the post
function getFormSubmissionVariablesFromHTMLRequest(){
	
	$listOfPostFieldNames = array();
	
	foreach (array_keys($_POST) as $fieldName){
		$listOfPostFieldNames[$fieldName] = $_POST[$fieldName];
	}
	return $listOfPostFieldNames;
}
