<?php

class CRG_FormController{
	
	public function __construct() {
		add_shortcode( 'CRG-Form', array( $this, 'ReturnShortcode' ) );
	}

	function ReturnShortcode() {

		$shortCodeOutput  = <<<SCO_HEREDOC
<link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<link rel='stylesheet' href='/resources/demos/style.css'>
<script>
  $(function() {
    $( '#date-of-birth' ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
</script>
<form method = 'post'>
<div>
    <label>Email Address:</label>
    <input required='required' placeholder='Your email address' name='EMAIL' type='email'>
</div>
<div>
    <label>First Name:</label>
    <input required='required' placeholder='Your first name' name='FNAME' type='text'>
</div>
<div>
    <label>Last Name:</label>
    <input required='required' placeholder='Your last name' name='LNAME' type='text'>
</div>
<div>
    <label>Mobile:</label>
    <input required='required' placeholder='Your mobile' name='MMERGE3' type='text'>
</div>
<div>
<label>Date of Birth:</label> <input id = 'date-of-birth' type='text' name = 'MMERGE4' type = 'text' placeholder='Date of Birth' />
</div>
<div>
 <label>Mailing Address:</label>
    <input required='required' placeholder='Address' name='MMERGE5' type='text'>
</div>
<div>    
<label>City:</label>
    <input required='required' placeholder='Your mailing city' name='MMERGE6' type='text'>
</div>
<div>
    <label>State:</label>
    <input required='required' placeholder='Your mailing state' name='MMERGE14' type='text'>
</div>
<div>
    <label>Zip:</label>
    <input required='required' placeholder='Your mailing zip' name='MMERGE16' type='text'>
</div>
<div>
    <label>Cancer Diagnosis:</label>
    <input required='required' placeholder='Your cancer diagnosis' name='MMERGE7' type='text'>
</div>
<div>
    <label>Regimen:</label>
    <label>
        <input required='required' value='AC' name='MMERGE8' type='radio'><span>AC </span>
    </label>
    <label>
        <input required='required' value='ACT' name='MMERGE8' type='radio'><span>ACT </span>
    </label>
    <label>
        <input required='required' value='FEC' name='MMERGE8' type='radio'><span>FEC </span>
    </label>
    <label>
        <input required='required' value='TC' name='MMERGE8' type='radio'><span>TC </span>
    </label>
    <label>
        <input required='required' value='TCH' name='MMERGE8' type='radio'><span>TCH </span>
    </label>
    <label>
        <input required='required' value='Other' name='MMERGE8' type='radio'><span>Other </span>
    </label>
</div>
<div>
    <label>Chemotheraphy (Other):</label>
    <input placeholder='Your chemotheraphy (other)' name='MMERGE9' type='text'>
</div>
<div>
    <label>Oncologist Name:</label>
    <input required='required' placeholder='Your oncologist name' name='MMERGE10' type='text'>
</div>
<div>
    <label>Oncologist Phone Number:</label>
    <input required='required' placeholder='Your oncologist phone number' name='MMERGE11' type='text'>
</div>
<div>
    <label>Oncology Treatment Center:</label>
    <input required='required' placeholder='Your oncology treatment center' name='MMERGE12' type='text'>
</div>
<div>
    <label>What is the driving time in minutes to Oncologist office?:</label>
    <input placeholder='Driving Time' name='MMERGE17' type='text'>
</div>

<div>
    <label>How many weeks apart are your chemo infusions scheduled for?:</label>
    <input placeholder='Enter the weeks between infusions' name='weeks-between' type='text'>
</div>

<div>
    <label>How Many Months is Your Chemo Regimen Scheduled For?:</label>
    <input placeholder='Enter the length of your treatment' name='length-of-treatment' type='text'>
</div>

<div>
    <input type='submit' value='submit'>
</div>
</form>
SCO_HEREDOC;
		return $shortCodeOutput;
	}
}

?>
