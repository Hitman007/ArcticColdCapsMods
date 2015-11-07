<?php

function returnCustomerAreaShortcode(){
  
  $shortcodeOutput = <<<shortcodeOutput
<h2>Customer Area</h2>
<br />
Please fill out the following forms:<br />
<a href = "">Information Form</a>
<a href = "">HIPPA Form</a>
shortcodeOutput;
  
  return $shortcodeOutput;

}
