<?php

function doModifyAdminWidgets(){
	include_once('doReturnAdminWidgetOutput.php');
	$adminWidgetOutput = doReturnAdminWidgetOutput();
	//die('hello wlrld');
        //die($adminWidgetOutput);
}

function myplugin_disable_screen_options( $show_screen ) {
    if ( current_user_can( 'manage_options' ) ) {
        return $show_screen;
    }
    return false;
}
add_filter( 'screen_options_show_screen', 'myplugin_disable_screen_options' );
