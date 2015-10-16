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
	add_filter('screen_options_show_screen', 'remove_screen_options', 10, 2);
	function remove_screen_options($display_boolean, $wp_screen_object){
		$blacklist = array('index.php');
		if (in_array($GLOBALS['pagenow'], $blacklist)) {
			$wp_screen_object->render_screen_layout();
			$wp_screen_object->render_per_page_options();
			return false;
		} else {
			return true;
		}
	}
	
	
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
}
