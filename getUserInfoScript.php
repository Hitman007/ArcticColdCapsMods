<?php

function getUserInfoScript() {
    $output = <<<OUTPUT
        <script>
        jQuery('document').ready(function() {
            jQuery('#bill_info').click(function() {
            	alert(jQuery(this).attr('class'));
            });
        });
        </script>
OUTPUT;
    
    echo $output;
}
