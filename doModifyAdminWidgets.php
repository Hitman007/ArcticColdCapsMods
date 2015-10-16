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
}
