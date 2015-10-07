<?php

class FormController{
	
	public $formSubmissionVariables = array();
	
	public $userID_whereFormShouldGo;
	
	public function __construct() {

		//create the CPT 'info-form'
		include_once('InfoFormCPT.php');
		$CPT = new InfoFormCPTs;
		
		//Add/Update CPT on form submission
		if (isset($_POST['crg-info-form'])){
			add_action('init', array($this, 'receiveFormSubmission') );
			//add_action('init', array($this, 'modifyFormSubmission') );
			//add_action('init', array($this, 'updateCPTrecord') );
		}
		
		//Form output:
		add_shortcode( 'CRG-Form', array( $this, 'returnShortcodeHTML' ) );
	}

	function returnShortcodeHTML() {
		include_once('InfoFormForm.php');
		$output = getTheActualForm();
		return $output;
	}
	
	function receiveFormSubmission(){
		include_once('receiveFormSubmissionFromHTMLrequest.php');
		$this->formSubmissionVariables = receiveFormSubmissionFromHTMLrequest();
	}
}
