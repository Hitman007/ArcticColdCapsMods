<?php

function returnConversionFunnelStartShortcode(){
  
$shortCodeOutput = <<<SHORT_CODE_OUTPUT
<form action = "/my-account">
<input type = "submit" value = "Returning User" />
</form>
New User

SHORT_CODE_OUTPUT;

  return $shortCodeOutput;
  
}
