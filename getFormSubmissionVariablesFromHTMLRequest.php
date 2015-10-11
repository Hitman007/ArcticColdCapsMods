<?php

namespace CustomRayGuns;

//This function is run when the user submits the POST variable ['crg-info-form']
function getFormSubmissionVariablesFromHTMLRequest(){
	
	$listOfPostFieldNames = array();
	
	foreach (array_keys($_POST) as $fieldName){
		$listOfPostFieldNames[$fieldName] = $_POST[$fieldName];
	}
	$user_id = get_current_user_id();
	if ($user_id == 0){
    		//die( 'You are currently not logged in. getFormSubmissionVariablesFromHTMLRequest.php 14');
    		$email = $listOfPostFieldNames['crg_login_email'];
    		$password = '1234';
    		$user_id = username_exists( $email );
	    	if ( !$user_id && email_exists($email) == false ) {
	        	$user_id = wp_create_user( $email, $password, $email );
	        	if( !is_wp_error($user_id) ) {
	            		$user = get_user_by( 'id', $user_id );
	        	}
	    	}
    		$listOfPostFieldNames['UserID'] = $user_id;
 	} else {
 		if ($listOfPostFieldNames['UserID'] == "") {
 			$listOfPostFieldNames['UserID'] = $user_id;
 		}
 		if (isset($_GET['user'])){
 			$listOfPostFieldNames['UserID'] = $_GET['user'];
 		}
	}
	return $listOfPostFieldNames;
}
