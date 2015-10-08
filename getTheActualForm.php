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

.input-group .form-control {
  z-index:1;	
}
.ui-datepicker {
  width: 19em;
}
</style>

<script>
  $(function() {
	  
    $( '#date-of-birth' ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "1900:2010"
    });
	
	$( '#infusion-start-date' ).datepicker({
      changeMonth: true,
      changeYear: true,
	  maxDate: "+5y",
	  minDate: new Date()
    });
	
  });
</script>

<!--Form-->
<div class='container'>
<h3>Arctic Cold Cap Therapy</h3>
<p>Please complete the form below and a Arctic Cold Caps representative will call to get you started. Please fill out all the information you know. Call us if you have any questions or concerns.</p>

<!--Column-->
<form method = 'post' class='form-horizontal' name = "CRG-InfoForm" action = "/services/" />
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
<label class='col-sm-5 control-label'>Date of Birth:</label> <div class='col-sm-7'>
            <input id = 'date-of-birth' type='text' name = 'date-of-birth' type = 'text' placeholder='Date of Birth'  class='form-control'>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Home Phone:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input  placeholder='Your Phone Number' name='Phone' type='text' class='form-control'>
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
    <label class='col-sm-5 control-label'>Fax:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input  placeholder='Your fax' name='Fax' type='text' class='form-control'>
            </div>
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
<select name = "State">
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
<div class='form-group'>
    <label class='col-sm-5 control-label'>Spouse / Relative:</label>
    <div class='col-sm-7'>
            <input  placeholder="Someone's Name" name='Spuse-Relative' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>Spouse / Relative Phone:</label>
    <div class='col-sm-7'>
            <input  placeholder= "Someone's Phone" name='Spouse-Relative-Phone' type='text' class='form-control'>
    </div>
</div>
<textarea name = "notes" style = "width:100%; height:10em;" placeholder = "Notes:"></textarea>
</div><!--Column-->

<div class='col-sm-8'>
<h4>Cancer Details</h4>
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
    <label class='col-sm-7'>When is your infusion scheduled to begin?  :</label>
    <div class='col-sm-5'>
    	<input name = "Infusion_Start_Date" id = "infusion-start-date" type = "text" class="form-control" placeholder = "Date" />
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>How many weeks apart are your treatments?  :</label>
    <div class='col-sm-5'>
    	<input name = "Weeks_Apart" id = "infusion-weeks-apart" type = "text" class="form-control" placeholder = "A number" />
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>How many rounds are you scheduled for?  :</label>
    <div class='col-sm-5'>
    	<input name = "Number_Of_Rounds" type = "text" class="form-control" placeholder = "A number" />
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncologist Name:</label>
    <div class='col-sm-5'>
            <input  placeholder='Your oncologist name' name='Oncologist_Name' type='text' class='form-control'></div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncologist Phone Number:</label>
    <div class='col-sm-5'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
            <input  placeholder='Your oncologist phone number' name='Oncologist_Phone' type='text' class='form-control'></div>
            </div>
</div>
<div class='form-group'>
 <label class='col-sm-5 control-label'>Oncologist Mailing Address:</label>
    <div class='col-sm-7'>
            <input  placeholder='Address' name='Oncologist_Address' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>    
<label class='col-sm-5 control-label'>City:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
            <input  placeholder='City' name='Oncologist_City' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>State:</label>
    <div class='col-sm-7'>
<select name = "Oncologist_State">
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
            <input  placeholder='Zip' name='Oncologist_Zip' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-7'>Oncology Treatment Center:</label>
    <div class='col-sm-5'>
            <input  placeholder='Your oncology treatment center' name='Oncology_Treatment_Center' type='text' class='form-control'></div>
</div>
<div class='form-group'>
 <label class='col-sm-5 control-label'>Treatment Center Mailing Address:</label>
    <div class='col-sm-7'>
            <input  placeholder='Address' name='Treatment_Address' type='text' class='form-control'>
    </div>
</div>
<div class='form-group'>    
<label class='col-sm-5 control-label'>City:</label>
    <div class='col-sm-7'>
            <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
            <input  placeholder='City' name='Treatment_City' type='text' class='form-control'>
            </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-sm-5 control-label'>State:</label>
    <div class='col-sm-7'>
<select name = "Treatment_State">
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
            <input  placeholder='Zip' name='Treatment_Zip' type='text' class='form-control'>
    </div>
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