<?php

namespace CustomRayGuns;

/*This codeblock assumes there is a form in text widget. Something like:
<form method = "post" action = "/thank-you">
We will call you within 24 hours.<br />
<input type = "text" name = "crg_quick_phone" placeholder = "Your phone number" /><br /><input type = "text" name = "crg_quick_name" placeholder = "Your name" /><br />
<input type = "submit" />
</form>
*/

function quickForm(){
	$to = "telepass@comcast.net";
	//$to = "telepass@comcast.net";
	$subject = "A quick response request on ACC has been submitted";
	$message = "The number submitted is : " . $_POST['crg_quick_phone'] . "\n\r";
	$message = $message . "The name submitted is : " . $_POST['crg_quick_name'] . "\n\r";
	wp_mail( $to, $subject, $message, $headers, $attachments );
}
