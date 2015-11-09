<?php

function returnCustomerAreaShortcode(){
    if ( is_user_logged_in() ) {
        $shortcodeOutput = <<<shortcodeOutput
<h2>Please review the following:</h2>
<ul>
<li>
<a href = "/info-sheet/">Information Form</a>
</li><li>
<a href = "/hipaa">HIPAA Form</a>
</li><li>
<a href = "/tac">Terms and Conditions</a><br /><input type = "checkbox" name = "user_accept_terms_true_or_false" /> I accept the Term and Conditions
</li>
</ul>
shortcodeOutput;
        return $shortcodeOutput;
     }else{ //User is not logged in:
       return;
     }
}
