<?php

function doModifyAdminWidgets(){
	
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	
	// Remove help menu
	add_filter( 'contextual_help', 'remove_contextual_help', 999, 3 );
	function remove_contextual_help($old_help, $screen_id, $screen){
		$screen->remove_help_tabs();
		return $old_help;
	}
	// Remove Screen Options
	add_filter( 'screen_options_show_screen', 'myplugin_disable_screen_options' );
	function myplugin_disable_screen_options( $show_screen ) {
		return $show_screen;
	}
	
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
}
