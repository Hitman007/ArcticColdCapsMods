<?php

function getUserInfoScript() {
    $output = <<<OUTPUT
        <script>
        jQuery('document').ready(function() {
            alert('loaded');
            //jQuery('#bill_info').click(function() {
            //	$(this).next("#bill_info_form").toggle();
            //});
        });
        </script>
    OUTPUT;
    
    echo $output;
}
