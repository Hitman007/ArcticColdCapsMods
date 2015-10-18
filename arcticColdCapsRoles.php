<?php

//namespace CustomRayGuns;

function arcticColdCapsRoles(){
	//die('arcticColdCapsRoles.php');
	
	global $wp_roles;
	if ( ! isset( $wp_roles ) )
		$wp_roles = new WP_Roles();
	//$wp_roles->roles['subscriber']['name'] = 'Customer';
	//$wp_roles->role_names['subscriber'] = 'Customer';
	//$wp_roles->roles['shop_manager']['name'] = 'Nurse';
	//$wp_roles->role_names['shop_manager'] = 'Nurse';
  
  //$role = get_role('shop_manager');
  //add_role( 'nurse', 'Nurse', $role->capabilities );
}
