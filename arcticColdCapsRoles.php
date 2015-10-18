<?php

namespace CustomRayGuns;

function arcticColdCapsRoles(){
  //die('arcticColdCapsRoles.php');
  
  $role = get_role('shop_manager');
  var_dump($role);
  //add_role( 'nurse', 'Nurse', $role->capabilities );
}
