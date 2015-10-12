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

add_filter('woocommerce_login_redirect', 'wcs_login_redirect', 100);
function wcs_login_redirect( $redirect ) {
     $redirect = 'http://google.com/';
     return $redirect;
}

function arcticColdCapsScripts() {
	//wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'arcticColdCapsScripts' );

