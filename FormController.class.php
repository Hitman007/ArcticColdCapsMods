<?php

namespace CustomRayGuns;

class FormController{
	
	public $formSubmissionVariables = array();
	
	public $userID_FormAuthor;
	
	public function __construct() {
		
		//This loads the script that adds a link to the admin area
		//include_once('addCustomColumn.php');

		//create the CPT 'info-form'
		include_once('InfoFormCPT.class.php');
		$CPT = new InfoFormCPTs;
		
		//Add/Update CPT on form submission
		if (isset($_POST['crg-info-form'])){
			add_action('init', array($this, 'receiveFormSubmission') );
			add_action('init', array($this, 'modifyFormSubmission') );
			add_action('init', array($this, 'updateRecord') );
		}
		
		//Form output:
		add_shortcode( 'CRG-Form', array( $this, 'returnShortcodeHTML' ) );
	}
	
	public function returnShortcodeHTML() {
		include_once('getTheActualForm.php');
		$output = getTheActualForm();
		return $output;
	}
	
	public function receiveFormSubmission(){
		include_once('getFormSubmissionVariablesFromHTMLRequest.php');
		$this->formSubmissionVariables = getFormSubmissionVariablesFromHTMLRequest();
	}
	
	public function modifyFormSubmission(){
		$listOfPostFieldNames = array();
		$listOfPostFieldNames = $this->formSubmissionVariables;
		$email = $listOfPostFieldNames['crg_login_email'];
		if ($email == ""){
			$email = $listOfPostFieldNames['First_Name'];
			$email = $email .  $listOfPostFieldNames['Last_Name'];
			$email = $email . "@artcticcoldcaps.com";
		}
		//checks to see if the submitted email is in the database and creates one if not
		$user = get_user_by( 'email', $email );
		if ($user === FALSE){
			$password = "BigSecretLOL";
	        	$listOfPostFieldNames['UserID'] = wp_create_user( $email, $password, $email );
		 }else{
			$listOfPostFieldNames['UserID'] = $user->ID;
		 }
		$this->formSubmissionVariables = $listOfPostFieldNames;
	}
	
	public function updateRecord(){
		$data = array();
		$data = $this->formSubmissionVariables;
		include_once('doUpdateRecord.php');
		doUpdateRecord($data);
	}
}
