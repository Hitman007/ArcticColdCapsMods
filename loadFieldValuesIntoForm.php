<?php

//the user WILL be logged in at this point. This script should directly echo a jQuery script
function loadFieldValuesIntoForm(){
  //die('line 5 loadFieldValuesIntoForm.');
  
  if(isset($_GET['user'])) {
    if (current_user_can('administrator')) {
      $user_id = $_GET['user'];
    } else {
      die('Not admin.');
    }
  } else {
    $user_id = get_current_user_id();
  }
  $data = get_user_meta ($user_id, 'CRG-FormInfo');
  $data = unserialize($data[0]);
  foreach ($data as $n => $v) {
    echo "<input type='hidden' name='".$n."' value='".$v."'>";
  }
  //var_dump($data);
  
  $output = <<<direct_output
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
jQuery( document ).ready(function() {
    jQuery("input[type='hidden']").each(function() {
      var name = jQuery(this).attr('name');
      alert(name);
  });
});
</script>
direct_output;

  echo $output;
  //die('loadFieldValuesIntoForm line 13');
}
