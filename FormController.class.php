<?php

namespace CustomRayGuns;

class FormController{
	
	public $formSubmissionVariables = array();
	
	public $userID_FormAuthor;
	
	public function __construct() {
		add_action('init', array($this, 'loadColumFix') );
		
		//create the CPT 'info-form'
		include_once('InfoFormCPT.class.php');
		$CPT = new InfoFormCPTs;
		
		//Add/Update CPT on form submission
		if (isset($_POST['crg-info-form'])){
			add_action('init', array($this, 'receiveFormSubmission') );
			add_action('init', array($this, 'modifyFormSubmission') );
			add_action('init', array($this, 'updateUserMetaData') );
		}
		
		//Form output:
		add_shortcode( 'CRG-Form', array( $this, 'returnShortcodeHTML' ) );
	}
	public function loadColumFix(){
			include_once('addCustomColum.php');	
		
	}
	public function returnShortcodeHTML() {
		if (!( is_user_logged_in())){
			die('error: USER SHOULD BE LOGGED IN');
		}
		include_once('getTheActualForm.php');
		$output = getTheActualForm();
		return $output;
	}
	
	public function receiveFormSubmission(){
		include_once('getFormSubmissionVariablesFromHTMLRequest.php');
		$this->formSubmissionVariables = getFormSubmissionVariablesFromHTMLRequest();
	}
	
	public function modifyFormSubmission(){
		//include_once('getFormAuthor.php');
	  	//$this->$userID_FormAuthor = getFormAuthor();
		//$x = $this->$userID_FormAuthor;
		//die ($x);
	}
	public function updateUserMetaData(){
		include_once('doUpdateUserMetaData.php');
		$data = array();
		$data = $this->formSubmissionVariables;
		doUpdateUserMetaData($data);
	}
}
