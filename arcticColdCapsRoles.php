<?php

namespace CustomRayGuns;

function arcticColdCapsRoles(){
  //die('arcticColdCapsRoles.php');
  
  $role = get_role('shop_manager');
  
  add_role( 'nurse', 'Nurse', $role->capabilities );
}
