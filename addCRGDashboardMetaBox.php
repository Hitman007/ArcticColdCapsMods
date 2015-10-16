function addCRGDashboardMetaBox() {

	add_action('wp_dashboard_setup', 'crgAddMetaBox');
	function crgAddMetaBox() {
		add_meta_box(
			'crg_dashboard_widget',		// ID
			'Custom Ray Guns',		// Title
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
}
