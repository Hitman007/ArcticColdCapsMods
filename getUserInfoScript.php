<?php

function getUserInfoScript() {
    $output = <<<OUTPUT
        <script>
        jQuery('document').ready(function() {
            jQuery('input.bill_info').click(function() {
                var div = jQuery(this).attr('id');
            	jQuery('div#' + div).toggle();
            	jQuery('div#' + div).html("<form>Next Billing Date: <input type = 'text' name = 'next-billing-date' > Treatments Remaining: <input type = 'text' name = 'treatments-remaining' size = '2' /> <input type = 'submit' value = 'UPDATE' name = 'recurring-billinging-submit' /></form>");
            });
        });
        </script>
OUTPUT;
    
    echo $output;
}
