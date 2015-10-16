<?php

function doModifyAdminWidgets(){
	if (!current_user_can('manage_options') ) {
		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	
	}
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
}
