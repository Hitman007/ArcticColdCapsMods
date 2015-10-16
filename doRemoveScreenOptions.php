function doRemoveScreenOptions($display_boolean, $wp_screen_object){
	$blacklist = array('index.php');
	if (in_array($GLOBALS['pagenow'], $blacklist)) {
		$wp_screen_object->render_screen_layout();
		$wp_screen_object->render_per_page_options();
		return false;
	} else {
		return true;
	}
}
