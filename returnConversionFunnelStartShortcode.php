<?php

function returnConversionFunnelStartShortcode(){
  if ( is_user_logged_in() ) {die('logged in');}
  
$shortCodeOutput = <<<SHORT_CODE_OUTPUT
<form action = "/my-account">
<input type = "submit" value = "Returning User" />
</form>
New User

SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
