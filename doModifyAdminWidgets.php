<?php

function doModifyAdminWidgets(){
	
	remove_action( 'welcome_panel', 'wp_welcome_panel' );
	
	//Normal Widgets (Left Side)
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' ); 			//Not sure
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );				//Removes Plugins Widget?
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );			//Not sure
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );			//Removes Comments Widget?
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );			//Removes At a Glance
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');				//Removes Activity
        remove_meta_box( 'woocommerce_dashboard_recent_reviews', 'dashboard', 'normal' );	//Remove WooCommerce Recent Reviews
        
        //Side Widgets (Right Side)
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );				//Remove WordPress News
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );			//Remove Quick Draft
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );			//Not sure
	
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
        
        add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );
        function example_add_dashboard_widgets() {
		wp_add_dashboard_widget(
	                 'crg_dashboard_widget',         // Widget slug.
	                 'Custom Ray Guns',         // Title.
	                 'doReturnAdminWidgetOutput' // Display function.
	        );
	}
	
}
