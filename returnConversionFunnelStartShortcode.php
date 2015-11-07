<?php

function returnConversionFunnelStartShortcode(){
  if ( is_user_logged_in() ) {
    echo ('
      <script type="text/javascript">
        window.location = "http://www.google.com/"
      </script>
  ');}
  
$shortCodeOutput = <<<SHORT_CODE_OUTPUT
<form action = "/my-account">
<input type = "submit" value = "Returning User" />
</form>
New User

SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
