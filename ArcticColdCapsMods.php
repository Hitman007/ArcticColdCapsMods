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


