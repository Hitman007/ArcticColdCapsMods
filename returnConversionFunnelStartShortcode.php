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
		jQuery('#returning-user-button-div').fadeOut();
		jQuery('#new-user-button-div').fadeOut();
	});
});
</script>
<div id = "returning-user-button-div">
	<input type = "button" value = "Returning User" />
</div>
<div id = "new-user-button-div">
	<input type = "button" value = "New User" />
</div>
SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
