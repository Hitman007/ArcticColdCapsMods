<?php

namespace CustomRayGuns;

function arcticColdCapsRoles(){
  //die('arcticColdCapsRoles.php');
  
  $wp_roles = new WP_Roles();
  
  $role = get_role('shop_manager');
  die($wp_roles);
  //add_role( 'nurse', 'Nurse', $role->capabilities );
}
