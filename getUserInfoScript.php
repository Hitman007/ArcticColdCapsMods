<?php

function getUserInfoScript() {
    $output = <<<OUTPUT
        <script>
        jQuery('document').ready(function() {
            jQuery('input.bill_info').click(function() {
                var div = jQuery(this).attr('id');
            	jQuery('div#' + div).toggle();
            	jQuery('div#' + div).html('hello');
            });
        });
        </script>
OUTPUT;
    
    echo $output;
}
