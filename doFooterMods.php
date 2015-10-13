<?php
$text = 'jQuery is working!';
$output = <<<scriptOutput
<script>
    jQuery('document').ready(function(){
        alert('$text');
    });
</script>
scriptOutput;

echo $output;
