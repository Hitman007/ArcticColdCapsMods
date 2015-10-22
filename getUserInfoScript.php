<?php

function getUserInfoScript() {
    $output = <<<OUTPUT
        <script>
        jQuery('document').ready(function() {
            jQuery('#bill_info').click(function() {
                var div = jQuery(this).attr('class')
            	jQuery('div.' + div).toggle();
            });
        });
        </script>
OUTPUT;
    
    echo $output;
}
