<?php

function returnCustomerAreaShortcode(){
  
  $shortcodeOutput = <<<shortcodeOutput
<h2>Customer Area</h2>
<br />
Please fill out the following forms:<br />
<a href = "/info-sheet/">Information Form</a><br />
<a href = "">HIPPA Form</a>
<a href = "/tac">Terms and Conditions</a><br />
<a href = "/hipaa">Artic Cold Caps HIPAA Authorization Form</a><br />
<a href = ""></a><br />
shortcodeOutput;
  
  return $shortcodeOutput;

}
