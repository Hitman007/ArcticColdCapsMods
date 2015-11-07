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
<div id = "new-user-form-div">
<br />
	<form method = "post">
			First Name<input type = "text" name = "crg_login_first_name" />
			Last Name<input type = "text" name = "crg_login_last_name" />
			Phone<input type = "text" name = "crg_login_phone" />
			Email<input type = "text" name = "crg_login_email" />
			<input type = "submit" value = "Submit" name = "crg_login_submit" />
	</form>
</div>
SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
