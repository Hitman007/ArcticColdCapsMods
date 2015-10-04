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

add_action( 'woocommerce_add_to_cart', 'custom_add_to_cart', 10, 2 );

function custom_add_to_cart( $cart_item_key, $product_id ) {
    // replace 123 with a valid product ID 
    if( 485 == $product_id ) {
        die('yo'); 
    }
}
