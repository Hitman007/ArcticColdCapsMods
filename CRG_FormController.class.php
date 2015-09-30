<?php

class CRG_FormController{
	
	public function __construct() {
		add_shortcode( 'CRG-Form', array( $this, 'ReturnShortcode' ) );
	}

	function ReturnShortcode() {

		$shortCodeOutput  = <<<SCO_HEREDOC
<!--Stylesheet-->        
<link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

<!--Scripts-->
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<!--Style-->
<style>
h4
{
    padding-bottom:4px;
    border-bottom:1px solid #ddd;
}

.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
</style>

<script>
  $(function() {
    $( '#date-of-birth' ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
</script>

<!--Form-->
<div class='container'>
<h3>Arctic Cold Cap Therapy.</h3>
<p>Please complete the form below and a Arctic Cold Caps representative will call to get you started. Call us if you have any questions or concerns.</p>

<!--Column-->
<form method = 'post' class='form-horizontal'>
<div class='col-sm-4'>
<h4>Personal Information</h4>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Email Address:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
            <input required='required' placeholder='Your email address' name='EMAIL' type='email' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>First Name:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
            <input required='required' placeholder='Your first name' name='FNAME' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Last Name:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
            <input required='required' placeholder='Your last name' name='LNAME' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Mobile:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input required='required' placeholder='Your mobile' name='MMERGE3' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
<label class='col-sm-5 control-label'>Date of Birth:</label> <div class='col-sm-7'>
            <input id = 'date-of-birth' type='text' name = 'MMERGE4' type = 'text' placeholder='Date of Birth'  class='form-control'>
    </div>
</div>
<div class='form-group'>
 <label class='col-sm-5 control-label'>Mailing Address:</label>
    <div class='col-sm-7'>
            <input required='required' placeholder='Address' name='MMERGE5' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>    
<label class='col-sm-5 control-label'>City:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
            <input required='required' placeholder='Your mailing city' name='MMERGE6' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>State:</label>
    <div class='col-sm-7'>
            <input required='required' placeholder='Your mailing state' name='MMERGE14' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Zip:</label>
    <div class='col-sm-7'>
            <input required='required' placeholder='Your mailing zip' name='MMERGE16' type='text' class='form-control'>
    </div>
</div>
</div><!--Column-->
<div class='col-sm-8'>
<h4>Cancer Details</h4>
<div class='form-group'>
    <label class='col-sm-7'>Cancer Diagnosis:</label>
    <div class='col-sm-5'>
        <div class='input-group'>
        <span class='input-group-addon'><i class='glyphicon glyphicon-ok'></i></span>
        <input required='required' placeholder='Your cancer diagnosis' name='MMERGE7' type='text' class='form-control'>
        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-1'>Regimen:</label>
    <div class='col-sm-2' align='center' style='margin-left:-10px;'>
            <input required='required' value='AC' name='MMERGE8' type='radio'><span> AC</span>
    </div>
    <div class='col-sm-2' align='center'>
            <input required='required' value='ACT' name='MMERGE8' type='radio'><span> ACT</span>
    </div>
    <div class='col-sm-2' align='center'>
            <input required='required' value='FEC' name='MMERGE8' type='radio'><span> FEC</span>
    </div>
    <div class='col-sm-2' align='center'>
            <input required='required' value='TC' name='MMERGE8' type='radio'><span> TC</span>
    </div>
    <div class='col-sm-2' align='center'>
            <input required='required' value='TCH' name='MMERGE8' type='radio'><span> TCH</span>
    </div>
    <div class='col-sm-2' align='center'>
            <input required='required' value='Other' name='MMERGE8' type='radio'><span> Other</span>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Chemotheraphy (Other):</label>
    <div class='col-sm-5'>
            <input placeholder='Your chemotheraphy (other)' name='MMERGE9' type='text' class='form-control'></div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncologist Name:</label>
    <div class='col-sm-5'>
            <input required='required' placeholder='Your oncologist name' name='MMERGE10' type='text' class='form-control'></div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncologist Phone Number:</label>
    <div class='col-sm-5'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input required='required' placeholder='Your oncologist phone number' name='MMERGE11' type='text' class='form-control'></div>
            </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncology Treatment Center:</label>
    <div class='col-sm-5'>
            <input required='required' placeholder='Your oncology treatment center' name='MMERGE12' type='text' class='form-control'></div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>What is the driving time in minutes to Oncologist office?</label>
    <div class='col-sm-5'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-road'></i></span>
            <input placeholder='Driving Time' name='MMERGE17' type='text' class='form-control'></div>
            </div>
</div>

<div class='form-group'>
    <label class='col-sm-7'>How many weeks apart are your chemo infusions scheduled for?</label>
    <div class='col-sm-5'>
            <input placeholder='Enter the weeks between infusions' name='weeks-between' type='text' class='form-control'></div>
</div>

<div class='form-group'>
    <label class='col-sm-7'>How Many Months is Your Chemo Regimen Scheduled For?</label>
    <div class='col-sm-5'>
            <input placeholder='Enter the length of your treatment' name='length-of-treatment' type='text' class='form-control'></div>
</div>

<div class='form-group'>
    <div class='col-sm-12' align='right'>
            <button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-ok'></span> Submit</button></div>
</div>

</div><!--Column-->
</form>
</div><!--Container-->
SCO_HEREDOC;
		return $shortCodeOutput;
	}
}

?>