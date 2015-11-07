<?php

function returnCustomerAreaShortcode(){
  
  $shortcodeOutput = <<<shortcodeOutput
<h2>Please review the following:</h2>
<ul>
<li>
<a href = "/info-sheet/">Information Form</a>
</li><li>
<a href = "/hipaa">HIPAA Form</a>
</li><li>
<a href = "/tac">Terms and Conditions</a>
</li><li>
<a href = "/hipaa">Artic Cold Caps HIPAA Authorization Form</a></li>
shortcodeOutput;
  
  return $shortcodeOutput;

}
