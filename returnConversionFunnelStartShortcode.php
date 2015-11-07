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
});
</script>
<div id = "returning-user-button-div">
	<input type = "button" value = "Returning User" />
</div>
<div>
New User
</div>
SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
