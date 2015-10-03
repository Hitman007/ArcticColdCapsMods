<?php

class CRG_FormController{
	
	public function __construct() {
		
		 
		//create the CPT 'info-form'
		include_once('InfoFormCPT.php');
		CreateInfoFormCPT();
		
		//Form output:
		add_shortcode( 'CRG-Form', array( $this, 'ReturnShortcodeHTML' ) );

		//Add/Update CPT on form submission
		if (isset($_POST['crg-info-form-email'])){
			die('form submitting');
		}
	}

	function ReturnShortcodeHTML() {
		include_once('InfoFormForm.php');
		$output = getTheActualForm();
		return $output;
	}
}

?>
