<?php

$output = <<<scriptOutput
<script>
    jQuery('document').ready(function(){
        var text = "Copyright (C), 2015 Arctic Cold Caps, LLC.";
        jQuery('div#sub-footer-core div.copyright').html(text);
        jQuery('div#sub-footer-core div.copyright').css('float','right');
        jQuery('div#sub-footer-core div.copyright').css('text-align','right');
    });
</script>
scriptOutput;
$url = home_url );
echo $url;
if ($x === "Arctic Cold Cap Therapy | Chemotherapy Hair Loss Prevention"){
    die("yup");
}

echo $output;
