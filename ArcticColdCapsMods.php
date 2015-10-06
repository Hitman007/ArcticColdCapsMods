<?php
/*
Plugin Name: Custom Ray Guns Arctic Cold Caps Mods
Plugin URI: http://customrayguns.com/
Description: 
Version: 1.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/
	include_once('FormController.class.php');
	$FormController = new FormController;
die('yo');
//This adds shipping to the cart when the basic rental in added to the cart.
add_action( 'woocommerce_add_to_cart', 'custom_add_to_cart', 10, 2 );
function custom_add_to_cart( $cart_item_key, $product_id ) {
    if( 485 == $product_id ) {
    	global $woocommerce;
    	$woocommerce->cart->add_to_cart(683);
    }
}
