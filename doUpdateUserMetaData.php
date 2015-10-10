<?php

function doUpdateUserMetaData($data){
  $user_id =  $data["UserID"];
  $meta = serialize($data);
  update_user_meta($user_id, 'CRG-FormInfo', $meta );
}
