<?php
/*
Plugin Name: Custom Ray Guns ACC Mods
Plugin URI: http://customrayguns.com/
Description: 
Version: 1.2
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

namespace CustomRayGuns;

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$urlParse = parse_url($url);
$path = $urlParse["path"];
if (!($path == "/checkout-2/")){

//adds the role "Nurse" alias for shop-manager - This is an unused function as of now. I will need to
//ask about how the Customer role gets added.
//include_once('arcticColdCapsRoles.php');
//arcticColdCapsRoles();

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
	//wp_enqueue_script( 'crg-admincptview-mods',  plugin_dir_url( __FILE__ ) . 'adminCPTviewMod.js' );
}

add_action('wp_footer', 'CustomRayGuns\loadFooterMods');
function loadFooterMods(){
	include_once('doFooterMods.php');
}

add_filter( 'auth_cookie_expiration', 'CustomRayGuns\keep_me_logged_in_for_1_year' );
function keep_me_logged_in_for_1_year( $expirein ) {
	return 31556926; // 1 year in seconds
}

add_action('admin_init','CustomRayGuns\shouldModifyAdminWidgets');
function shouldModifyAdminWidgets(){
	require_once 'doModifyAdminWidgets.php';
	doModifyAdminWidgets();
}

add_action('admin_init', 'CustomRayGuns\customDashboardMetaBox');
function customDashboardMetaBox() {
	require_once 'addCRGDashboardMetaBox.php';
	addCRGDashboardMetaBox();
}

// Remove help menu
add_filter('contextual_help', 'CustomRayGuns\remove_contextual_help', 999, 3 );
function remove_contextual_help($old_help, $screen_id, $screen){
	$screen->remove_help_tabs();
	return $old_help;
}

// Remove Screen Options
add_filter('screen_options_show_screen', 'CustomRayGuns\shouldRemoveSreenOptions', 10, 2);
function shouldRemoveSreenOptions($display_boolean, $wp_screen_object){
	require_once 'doRemoveScreenOptions.php';
	doRemoveScreenOptions($display_boolean, $wp_screen_object);
}

//Change Role Names, Shop Manager => Nurse, Subscriber => Customer (As of now, Nurse rename is in effect, I need to clarify something about Customer Role)
add_action('init','CustomRayGuns\shouldModifyRoleNames');
function shouldModifyRoleNames(){
	require_once 'arcticColdCapsRoles.php';
	arcticColdCapsRoles();
}

add_action('woocommerce_payment_complete', 'CustomRayGuns\shouldDetectProductPayment');
function shouldDetectProductPayment() {
	require_once 'detectProductPayment.php';
	detectProductPayment();
}

//This controls and sends the sidebar "quickform":
if (isset($_POST['crg_quick_phone'])){
	require_once 'quickForm.php';
	add_action('init', 'CustomRayGuns\quickForm');
}

//This is the Welcome page
add_shortcode('conversion-funnel-start', 'CustomRayGuns\loadConversionFunnelStartShortcode');
function loadConversionFunnelStartShortcode(){
	require 'returnConversionFunnelStartShortcode.php';
	return returnConversionFunnelStartShortcode();
}

//This is the Woo Commerce "my-account" page
add_shortcode('customer-area', 'CustomRayGuns\loadReturnCustomerAreaShortcode');
function loadReturnCustomerAreaShortcode(){
	require 'returnCustomerAreaShortcode.php';
	return returnCustomerAreaShortcode();
}

add_action('init', 'CustomRayGuns\woocommerce_output_related_products');
function woocommerce_output_related_products() {
woocommerce_related_products(4,3); // Display 4 products in rows of 2
}


}
