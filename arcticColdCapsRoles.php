<?php

//namespace CustomRayGuns;

function arcticColdCapsRoles(){
	//die('arcticColdCapsRoles.php');
	
	global $wp_roles;
	if ( ! isset( $wp_roles ) )
		$wp_roles = new WP_Roles();
	$wp_roles->roles['subscriber']['name'] = 'Customer';
	$wp_roles->role_names['subscriber'] = 'Customer';
  
  //$role = get_role('shop_manager');
  //add_role( 'nurse', 'Nurse', $role->capabilities );
}
