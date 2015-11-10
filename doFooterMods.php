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
$x = home_url();
if ($x == "https://arcticcoldcaps.com"){
    die("yup");
    $output = $output . "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47404204-2', 'auto');
  ga('send', 'pageview');

</script>";
}
echo $output;
