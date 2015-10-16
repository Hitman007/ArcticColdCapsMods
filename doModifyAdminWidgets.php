<?php

function doModifyAdminWidgets(){
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
}
