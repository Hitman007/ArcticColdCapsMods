<?php

namespace CustomRayGuns;

//This function is run when the user submits the POST variable ['crg-info-form']
function getFormSubmissionVariablesFromHTMLRequest(){
	$listOfPostFieldNames = array();
	
	foreach (array_keys($_POST) as $fieldName){
		$listOfPostFieldNames[$fieldName] = $_POST[$fieldName];
	}
	$user_id = 0;
	if(isset($_GET['user'])) {
		$user_id = $_GET['user'];
	}
	if ($user_id == 0){
    		die( 'You are currently not logged in. getFormSubmissionVariablesFromHTMLRequest.php 14');
 	} else {
		$listOfPostFieldNames['UserID'] = $user_id;
	}
	return $listOfPostFieldNames;
}
