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
	alert('jQuery');
</script>
<div>
	<form action = "/my-account">
		<input type = "submit" value = "Returning User" />
	</form>
</div>
<div>
New User
</div>
SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
