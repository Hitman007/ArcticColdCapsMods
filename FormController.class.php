<?php

namespace CustomRayGuns;

class FormController{
	
	public $formSubmissionVariables = array();
	
	public $userID_whereFormShouldGo;
	
	public function __construct() {

		//create the CPT 'info-form'
		include_once('InfoFormCPT.class.php');
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

	public function returnShortcodeHTML() {
		include_once('getTheActualForm.php');
		$output = getTheActualForm();
		return $output;
	}
	
	public function receiveFormSubmission(){
		include_once('getFormSubmissionVariablesFromHTMLRequest.php');
		$this->formSubmissionVariables = getFormSubmissionVariablesFromHTMLRequest();
                $x = $this->formSubmissionVariables;
                //var_dump ($x);die();
	}
	
	public function modifyFormSubmission(){}
	public function updateCPTrecord(){}
}
