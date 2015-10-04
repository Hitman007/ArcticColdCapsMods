<?php

function getTheActualForm(){

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
<h3>Arctic Cold Cap Therapy</h3>
<p>Please complete the form below and a Arctic Cold Caps representative will call to get you started. Call us if you have any questions or concerns.</p>

<!--Column-->
<form method = 'post' class='form-horizontal' name = "CRG-InfoForm" />
<input type = "hidden" name = "crg-info-form" value = "TRUE" />
<div class='col-sm-4'>
<h4>Personal Information</h4>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Email Address:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
            <input placeholder='Your email address' name='Email' type='email' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>First Name:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
            <input  placeholder='Your first name' name='First_Name' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Last Name:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
            <input  placeholder='Your last name' name='Last_Name' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Mobile:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input  placeholder='Your mobile' name='Mobile' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
<label class='col-sm-5 control-label'>Date of Birth:</label> <div class='col-sm-7'>
            <input id = 'date-of-birth' type='text' name = 'DOB' type = 'text' placeholder='Date of Birth'  class='form-control'>
    </div>
</div>
<div class='form-group'>
 <label class='col-sm-5 control-label'>Mailing Address:</label>
    <div class='col-sm-7'>
            <input  placeholder='Address' name='Address' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>    
<label class='col-sm-5 control-label'>City:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
            <input  placeholder='Your mailing city' name='City' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>State:</label>
    <div class='col-sm-7'>
<select name = ""crg-info-form-state"State">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Zip:</label>
    <div class='col-sm-7'>
            <input  placeholder='Your mailing zip' name='Zip' type='text' class='form-control'>
    </div>
</div>
<textarea name = "notes" style = "width:100%; height:10em;"></textarea>
</div><!--Column-->

<div class='col-sm-8'>
<h4>Cancer Details</h4>
<div class='form-group'>
    <label class='col-sm-7'>Current Diagnosis:</label>
    <div class='col-sm-5'>
        <div class='input-group'>
	<textarea name = "Current_Diagnosis" placeholder = "Please enter your current diagnosis" ></textarea>
        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Previous Diagnosis:</label>
    <div class='col-sm-5'>
        <div class='input-group'>
	<textarea name = "Prev_Diagnosis" placeholder = "Please enter your previous diagnosis" ></textarea>
        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Other medical conditions:</label>
    <div class='col-sm-5'>
        <div class='input-group'>
	<textarea name = "Other_Conditions" placeholder = "Please enter any other conditions" ></textarea>
        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Shampoo used and frequency:</label>
    <div class='col-sm-5'>
        <div class='input-group'>
	<textarea name = "Shampoo" placeholder = "Please enter Shampoo used and frequency" ></textarea>
        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>When was hair last treated:</label>
    <div class='col-sm-5'>
        <div class='input-group'>
	<textarea name = "Last_Treatment" placeholder = "i.e. highlights" ></textarea>
        </div>
    </div>
</div>
<div class='form-group'>
	<label class='col-sm-7'>Regimen:</label>
	<div class='col-sm-5'>
		<div class='input-group'>
			<select name = "regimen">
				<option value="AC">AC</option>
				<option value="ACT">ACT</option>
				<option value="FEC">FEC</option>
				<option value="TC">TC</option>
				<option value="TCH">TCH</option>
				<option value="Other" selected >Other</option>
			</select>
		</div>
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
            <input  placeholder='Your oncologist name' name='MMERGE10' type='text' class='form-control'></div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncologist Phone Number:</label>
    <div class='col-sm-5'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input  placeholder='Your oncologist phone number' name='MMERGE11' type='text' class='form-control'></div>
            </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncology Treatment Center:</label>
    <div class='col-sm-5'>
            <input  placeholder='Your oncology treatment center' name='MMERGE12' type='text' class='form-control'></div>
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
            <input type='submit' class='btn btn-primary' >
    </div>
</div>

</div><!--Column-->
</form>
</div><!--Container-->
SCO_HEREDOC;

return $shortCodeOutput;
}

?>
