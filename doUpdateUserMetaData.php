<?php

function doUpdateUserMetaData($data){
  var_dump($data);
  
  $user_id =  $data["UserID"];
  $meta = serialize($data);
  
  update_user_meta($user_id, 'CRG-FormInfo', $meta );
  
  die();
}
