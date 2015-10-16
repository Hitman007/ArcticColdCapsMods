<?php

function doModifyAdminWigets(){
	include_once('doReturnAdminWidgetOutput.php');
	//$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die($adminWidgetOutput);
	
	global $wp_meta_boxes;
	
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	//remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
