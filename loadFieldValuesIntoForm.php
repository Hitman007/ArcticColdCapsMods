<?php

//the user WILL be logged in at this point. This script should directly echo a jQuery script
function loadFieldValuesIntoForm(){
  //die('line 5 loadFieldValuesIntoForm.');
  $output = <<<direct_output
<script>
        alert('jQuery Hello line 10');

  </script>
direct_output;

  echo $output;
  //die('loadFieldValuesIntoForm line 13');
}
