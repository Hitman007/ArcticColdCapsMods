<?php

function doUpdateRecord($data){
  $user_id =  $data["UserID"];
  $meta = serialize($data);
  update_user_meta($user_id, 'CRG-FormInfo', $meta );
}