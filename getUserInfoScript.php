<?php


$output = <<<SCRIPTOUTPUT
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    jQuery('#bill_info').click(function() {
    	$(this).next("#bill_info_form").toggle();
    });
</script>
SCRIPTOUTPUT;

return $output;
