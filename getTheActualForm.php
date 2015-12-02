<?php

function getTheActualForm() {
	if ( is_user_logged_in() ){
		include_once('loadFieldValuesIntoForm.php');
		loadFieldValuesIntoForm();
	}
	
	$shortCodeOutput = <<<SCO_HEREDOC
        <!--Stylesheet-->        
        <link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
        <!--Scripts-->
        <script src='//code.jquery.com/jquery-1.10.2.js'></script>
        <script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
        <!--Style-->
        <style>
            h3 {
                color: darkcyan;
            }
            h4
            {
                padding:5px;
                background-color: darkseagreen;
                border-radius: 5px;
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
            .personal_info {
                background-color: powderblue;
                border-radius: 5px;
            }
            select option { 
                color: black;
                padding-left: 10px;
            }
            .empty { 
                color: #999;
                padding-left: 8px;
            }
            .submit {
                background-color: darkseagreen;
                font-size: 16px;
            }
        </style>
        <script>
            $(function () {

                $('#date-of-birth').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1900:2010"
                });

                $('#infusion-start-date').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    maxDate: "+5y",
                    minDate: new Date()
                });
                $("select").change(function () {
                    if ($(this).val() === "0")
                        $(this).addClass("empty");
                    else
                        $(this).removeClass("empty")
                });
                $("select").change();
            });
        </script>
        <!--Form-->
        <div class='container'>
            <h3>Arctic Cold Cap Therapy</h3>
            <p>Please complete the form below and a Arctic Cold Caps representative will call to get you started. Please fill out all the information you know. Call us if you have any questions or concerns.</p>
            <!--Column-->
            <form method = 'post' class='form-vertical' name = "CRG-InfoForm" action = "/services/" >
                <input type = "hidden" name = "crg-info-form" value = "TRUE" />
                <div class='col-sm-12 personal_info'>
                    <h4 class="text-center">Personal Information</h4>
                    <fieldset class="col-sm-6">
                        <div class='form-group'>
                            <label class='control-label'>Name:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                                <input  placeholder='Your first name' name='First_Name' type='text' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                                <input  placeholder='Your last name' name='Last_Name' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Date of Birth:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                                <input id = 'date-of-birth' type='text' name = 'date-of-birth' type = 'text' placeholder='Your Date of Birth'  class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Contact Information:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
                                <input placeholder='Your email address' name='crg_login_email' type='email' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
                                <input  placeholder='Your land phone number' name='Phone' type='text' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
                                <input  placeholder='Your mobile phone number' name='Mobile' type='text' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
                                <input  placeholder='Your fax number' name='Fax' type='text' class='form-control'>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-sm-6">
                        <div class='form-group'>
                            <label class='control-label'>Mailing Address:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Your mailing street address' name='Address' type='text' class='form-control'/>
                            </div>

                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Your mailing city' name='City' type='text' class='form-control'>
                            </div>

                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <select class='empty form-control' name = "State" style="padding-left:8px;">
                                    <option value="0" selected="selected">Your mailing state</option>
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
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Your mailing zip' name='Zip' type='text' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Spouse / Relative Information:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                                <input  placeholder="Spouse / Relative's Name" name='Spouse-Relative' type='text' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
                                <input  placeholder= "Spouse / Relative's Phone Number" name='Spouse-Relative-Phone' type='text' class='form-control'>
                            </div>
                    </fieldset>
                    <fieldset class="col-sm-12">
                        <div class='form-group'>
                            <label class='control-label'>Notes:</label>
                            <textarea class="form-control" name = "notes" style = "width:100%; height:10em;"></textarea>
                        </div>
                    </fieldset>
                </div><!--Column-->
                <div class="divider">&nbsp;</div>
                <div class='col-sm-12 personal_info'>
                    <h4 class="text-center">Cancer Details</h4>
                    <fieldset class="col-sm-6">
                        <div class='form-group'>
                        
                            <div class='form-group col-sm-12'>
                            <label class='control-label'>Diagnosis:</label>
                            <textarea name = "diagnosis"></textarea>
                        </div>
                        
                        
                        
                            <div class="col-sm-8 text-right" style="padding-right:5px;">
                                <label class='control-label'>Regimen:</label>
                            </div>
                            <div class="col-sm-4" style="padding-left:0;">
                                <select class="form-control" name = "regimen" style="padding-left:8px;">
                                    <option value="AC">AC</option>
                                    <option value="ACT">ACT</option>
                                    <option value="FEC">FEC</option>
                                    <option value="TC">TC</option>
                                    <option value="TCH">TCH</option>
                                    <option value="Other" selected="selected">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="divider">&nbsp</div>
                        <div class='form-group'>
                            <div class="col-sm-8 text-right" style="padding-right:5px;">
                                <label class='control-label'>When is your infusion scheduled to begin?  :</label>
                            </div>
                            <div class="col-sm-4" style="padding-left:0;">
                                <input name = "Infusion_Start_Date" id = "infusion-start-date" type = "text" class="form-control" placeholder = "Date" />
                            </div>
                        </div>
                        <div class="divider">&nbsp</div>
                        <div class='form-group'>
                            <div class="col-sm-8 text-right" style="padding-right:5px;">
                                <label class='control-label'>How many weeks apart are your treatments?  :</label>
                            </div>
                            <div class="col-sm-4" style="padding-left:0;">
                                <input name = "Weeks_Apart" id = "infusion-weeks-apart" type = "text" class="form-control" placeholder = "A number" />
                            </div>
                        </div>
                        <div class="divider">&nbsp</div>
                        <div class='form-group'>
                            <div class="col-sm-8 text-right" style="padding-right:5px;">
                                <label class='control-label'>How many rounds are you scheduled for?  :</label>
                            </div>
                            <div class="col-sm-4" style="padding-left:0;">
                                <input name = "Number_Of_Rounds" type = "text" class="form-control" placeholder = "A number" />
                            </div>
                        </div>
                        <div class="divider">&nbsp</div>
                        <div class='form-group col-sm-12'>
                            <label class='control-label'>Oncologist Name:</label>
                            <input  placeholder='Your oncologist name' name='Oncologist_Name' type='text' class='form-control'>
                        </div>
                        <div class='form-group col-sm-12'>
                            <label class='control-label'>Oncologist Phone Number:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
                                <input  placeholder='Your oncologist phone number' name='Oncologist_Phone' type='text' class='form-control'>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-sm-6">
                        <div class='form-group'>
                            <label class='control-label'>Oncologist Mailing Address:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Street Address' name='Oncologist_Address' type='text' class='form-control'>   
                            </div>
                            <!--<label class='control-label'>City:</label>-->
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='City' name='Oncologist_City' type='text' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <select class="empty form-control" name = "Oncologist_State" style="padding-left:8px;">
                                    <option value="0" selected="selected">State</option>
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
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Zip' name='Oncologist_Zip' type='text' class='form-control'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='control-label'>Oncology Treatment Center:</label>
                            <input  placeholder='Your oncology treatment center' name='Oncology_Treatment_Center' type='text' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Treatment Center Mailing Address:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Street Address' name='Treatment_Address' type='text' class='form-control'/>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='City' name='Treatment_City' type='text' class='form-control'>
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <select class="empty form-control" name = "Treatment_State" style="padding-left:8px;">
                                    <option value="0" selected="selected">State</option>
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
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Zip' name='Treatment_Zip' type='text' class='form-control'>
                            </div>
                        </div>
                        
                        <div class='form-group'>
                            <label class='control-label'>Nurse Navigator:</label>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-map-marker'></i></span>
                                <input  placeholder='Name' name='nurse_navigator_name' type='text' class='form-control'/>
                                 <input  placeholder='Telephone Number' name='nurse_navigator_phone' type='text' class='form-control'/>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                    </fieldset>
                </div><!--Column-->
                <div class="divider">&nbsp;</div>
                <input type = "hidden" name = "UserID" />
                <div class='form-group'>
                    <div class='button text-center'>
                        <input type='submit' value="Submit" class='btn submit'>
                    </div>
                </div>
            </form>
        </div><!--Container-->
SCO_HEREDOC;
    return $shortCodeOutput;
}

?>
