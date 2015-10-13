<?php
/*
Plugin Name: Custom Ray Guns Arctic Cold Caps Mods
Plugin URI: http://customrayguns.com/
Description: 
Version: 1.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

namespace CustomRayGuns;

//adds the role "Nurse" alias for shop-manager
include_once('arcticColdCapsRoles.php');
arcticColdCapsRoles();

//The main plugin:
include_once('FormController.class.php');
$FormController = new FormController;

//Automatically adds standard shipping as a stand alone product to certain transactions.
include_once('WooAutomaticallyAddShipping.php');
WooAutomaticallyAddShipping();

add_action( 'wp_enqueue_scripts', 'CustomRayGuns\arcticColdCapsScripts' );
function arcticColdCapsScripts(){
	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'crg-footer-mods',  plugin_dir_url( __FILE__ ) . 'footerMods.js' );
	wp_enqueue_script( 'crg-admincptview-mods',  plugin_dir_url( __FILE__ ) . 'adminCPTviewMod.js' );
	
}

add_action('admin_enqueue_scripts', 'CustomRayGuns\crgCustomAdminScripts');
function crgCustomAdminScripts( ) {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'crg-admincptview-mods',  plugin_dir_url( __FILE__ ) . 'adminCPTviewMod.js' );
}

add_action('wp-footer', 'CustomRayGuns\loadFooterMods');
function loadFooterMods(){
    include_once('doFooterMods.php');
}





