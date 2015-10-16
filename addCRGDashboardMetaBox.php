<?php

function addCRGDashboardMetaBox() {
	add_meta_box(
		'crg_dashboard_widget',		// ID
		'Help [This feature coming soon!]',		// Title
		'crgDashboardWidgetFunction',	// Callback
		'dashboard',			// Screen
		'side',				// Context
		'high'				// Priority
	);
}

function crgDashboardWidgetFunction() {
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	echo $adminWidgetOutput;
}
