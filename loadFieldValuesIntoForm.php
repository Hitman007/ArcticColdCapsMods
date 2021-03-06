<?php

//the user WILL be logged in at this point. This script should directly echo a jQuery script
function loadFieldValuesIntoForm(){
  //die('line 5 loadFieldValuesIntoForm.');
  
  if(isset($_GET['user'])) {
  	if (current_user_can('administrator')||current_user_can('nurse')) {
      $user_id = $_GET['user'];
    } else {
      die('Not admin.');
    }
  } else {
    $user_id = get_current_user_id();
  }
  
  $user = get_userdata( $user_id );
  $title = $user->last_name . ", " . $user->first_name;
  $form = get_page_by_title( $title, 'OBJECT', 'InfoForm' );
  
  if (is_object($form)){
  	$data = get_post_meta($form->ID, '', true);
   }else{
    $data = FALSE;
  }
  
  if ($data) {
    foreach ($data as $n => $v) {
        if($n === 'notes') {
          echo "<input type='hidden' name='".$n."' value='".$form->post_content."'>";
        } else {
          echo "<input type='hidden' name='".$n."' value='".$v[0]."'>";
        }
    }
  } else {
    $phone = get_user_meta( $user_id, 'billing_phone', true );
    echo "<input type='hidden' name='First_Name' value='".$user->first_name."'>";
    echo "<input type='hidden' name='Last_Name' value='".$user->last_name."'>";
    echo "<input type='hidden' name='crg_login_email' value='".$user->user_email."'>";
    echo "<input type='hidden' name='Mobile' value='".$phone."'>";
  }

  $output = <<<direct_output
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
  jQuery( document ).ready(function($) {
    $("input[type='hidden']").each(function() {
      var name = $(this).attr('name');
      var val = $(this).val();
      $("form[name='CRG-InfoForm'] input[name="+name+"]").val(val+"");
      $("form[name='CRG-InfoForm'] select[name="+name+"]").val(val+"");
      $("form[name='CRG-InfoForm'] textarea[name="+name+"]").val(val+"");
    });
  });
  </script>
direct_output;

  echo $output;
  //die('loadFieldValuesIntoForm line 13');
}
