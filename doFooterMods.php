<?php
$text = 'jQuery is working!';
$output = <<<scriptOutput
<script>
    jQuery('document').ready(function(){
        var text = "This site is a <a href='http://customrayguns.com' target='_BLANK'>Custom Ray Gun <img src='http://customrayguns.net/wp-content/plugins/crg_mods/images/ray_gun.png'></a>";
        jQuery('div#sub-footer-core div.copyright').html(text);
        jQuery('div#sub-footer-core div.copyright').css('float','right');
        jQuery('div#sub-footer-core div.copyright').css('text-align','right');
    });
</script>
scriptOutput;

echo $output;
