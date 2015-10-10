<?php

//the user WILL be logged in at this point. This script should directly echo a jQuery script
function loadFieldValuesIntoForm(){
  //die('line 5 loadFieldValuesIntoForm.');
  
  $output = <<<direct_output
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
jQuery( document ).ready(function() {
        alert('jQuery Hello line 11');
});
</script>
direct_output;

  echo $output;
  //die('loadFieldValuesIntoForm line 13');
}
