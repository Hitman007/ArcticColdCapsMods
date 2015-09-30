<?php
/*
Plugin Name: CRG Wordpress Form
Plugin URI: http://customrayguns.com/
Description: 
Version: 0.1
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/
	include_once('CRG_FormController.class.php');
	$CRG_FormController = new CRG_FormController;
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );

?>
