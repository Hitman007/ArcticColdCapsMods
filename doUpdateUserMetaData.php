<?php

function doUpdateUserMetaData($data){
  var_dump($data);
  
  $user_id =  $data["UserID"];
  
  update_user_meta($user_id, 'CRG-FormInfo', $data );
  
  die();
}
