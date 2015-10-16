<?php

function doModifyAdminWidgets(){
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	die($adminWidgetOutput);
}
