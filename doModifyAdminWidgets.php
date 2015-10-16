<?php

function doModifyAdminWidgets(){
	

	global $wp_meta_boxes;
	
	
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
        
}
