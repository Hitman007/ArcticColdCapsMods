<?php

namespace CustomRayGuns;

class FormController{
	
	public $formSubmissionVariables = array();
	
	public $userID_FormAuthor;
	
	public function __construct() {
		
		//create the CPT 'info-form'
		include_once('InfoFormCPT.class.php');
		$CPT = new InfoFormCPTs;
		
		//Add/Update CPT on form submission
		if (isset($_POST['crg-info-form'])){
			add_action('init', array($this, 'receiveFormSubmission') );
			add_action('init', array($this, 'modifyFormSubmission') );
			add_action('init', array($this, 'updateCPTrecord') );
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
		//include_once('getFormAuthor.php');
	  	//$this->$userID_FormAuthor = getFormAuthor();
		//$x = $this->$userID_FormAuthor;
		//die ($x);
	}
	public function updateCPTrecord(){
		$data = array();
		$data = $this->$formSubmissionVariables;
		$content = serialize($data);	
		$title = $_POST['Last_Name'] . ", " . $_POST['First_Name'];
		$my_post = array(	'post_title'    => $title,
				'post_content'  => $content,
				'post_type'   => 'InfoForm',
		);
		// Insert the post into the database
		wp_insert_post( $my_post );
	}
}
