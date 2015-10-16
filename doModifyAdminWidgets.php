<?php

function doModifyAdminWidgets(){
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
        
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
