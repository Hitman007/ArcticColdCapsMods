<?php

$output = <<<SCRIPTOUTPUT
<script>
    jQuery('#bill_info').click(function() {
    	$(this).next("#bill_info_form").toggle();
    });
</script>
SCRIPTOUTPUT;

echo $output;
