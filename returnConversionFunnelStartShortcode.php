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
<div id = "returning-user-button-div">
	<input type = "button" value = "Returning User" />
</div>
<div id = "new-user-button-div">
	<input type = "button" value = "New User" />
</div>
<div id = "new-user-form-div" style = "display:none;">
<br />
	<form method = "post">
		<table>
			<tr><td>First Name</td><td><input type = "text" name = "crg_login_first_name" /></td></tr>
			<tr><td>Last Name</td><td><input type = "text" name = "crg_login_last_name" /></td></tr>
			<tr><td>Phone</td><td><input type = "text" name = "crg_login_phone" /></td></tr>
			<tr><td>Email</td><td><input type = "text" name = "crg_login_email" /></td></tr>
		</table>
	</form>
</div>
SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
