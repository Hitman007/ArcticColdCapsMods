<?php

class FormController{
	
	public function __construct() {
		 
		//create the CPT 'info-form'
		include_once('InfoFormCPT.php');
		$CPT = new InfoFormCPTs;
		
		//Form output:
		add_shortcode( 'CRG-Form', array( $this, 'ReturnShortcodeHTML' ) );

		//Add/Update CPT on form submission
		if (isset($_POST['crg-info-form'])){
			add_action('init', array($this, 'receiveFormSubmission') );
		}
	}

	function ReturnShortcodeHTML() {
		include_once('InfoFormForm.php');
		$output = getTheActualForm();
		return $output;
	}
	
	function receiveFormSubmission(){
		include_once('FormReciever.php');
	}
}

?>
