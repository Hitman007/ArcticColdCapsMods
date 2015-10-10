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

//The main plugin:
include_once('FormController.class.php');
$FormController = new FormController;

//Automatically adds standard shipping as a stand alone product to certain transactions.
include_once('WooAutomaticallyAddShipping.php');
WooAutomaticallyAddShipping();

 add_filter( 'registration_redirect', 'my_redirect_home' );
function my_redirect_home( $registration_redirect ) {
 $URL = get_site_url() . "/info-sheet/";
	return  $URL;
}
