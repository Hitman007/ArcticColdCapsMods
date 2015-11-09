<?php

function returnConversionFunnelStartShortcode(){
  if ( is_user_logged_in() ) {
    echo ('
      <script type="text/javascript">
        window.location = "/my-account/"
      </script>
  ');}
  
$shortCodeOutput = <<<SHORT_CODE_OUTPUT
<script>
jQuery('document').ready(function(){
	//alert('jQuery is working');
	jQuery('#returning-user-button-div').click(function(){
		window.location.replace("/my-account/");
	});
	jQuery('#new-user-button-div').click(function(){
		jQuery('#returning-user-button-div').hide();
		jQuery('#new-user-button-div').hide();
		jQuery('#new-user-form-div').slideDown('slow');
	});
});
</script>
<div id = "returning-user-button-div" style="text-align: center; margin-bottom: 20px;">
	<input style=" max-width: 200px; width: 100%; font-size: 16px;" type = "button" value = "Returning User" />
</div>
<div id = "new-user-button-div" style="text-align: center; margin-bottom: 20px;">
	<input style=" max-width: 200px; width: 100%; font-size: 16px;" type = "button" value = "New User" />
</div>
<div id = "new-user-form-div" style = "display:none;">
<br />
	<form method = "post">
		<label for="crg_login_first_name">
			<span>First Name</span>
			<input type="text" name="crg_login_first_name" />
		</label>
		<label for="crg_login_last_name">
			<span>Last Name</span>
			<input type="text" name="crg_login_last_name" />
		</label>
		<label for="crg_login_phone">
			<span>Phone</span>
			<input type ="text"name="crg_login_phone" />
		</label>
		<label for="crg_login_email">
			<span>Email</span>
			<input type ="text" name="crg_login_email" />
		</label>
		<input type="submit" value="Submit" name="crg_login_submit" />
	</form>
</div>
SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
