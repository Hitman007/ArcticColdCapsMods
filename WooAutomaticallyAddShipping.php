<?php

function WooAutomaticallyAddShipping(){
    //This adds shipping to the cart when the basic rental in added to the cart:
    add_action( 'woocommerce_add_to_cart', 'custom_add_to_cart', 10, 2 );
    function custom_add_to_cart( $cart_item_key, $product_id ) {
    	if( 485 == $product_id ) {
    		global $woocommerce;
    		//adds shipping:
    		$woocommerce->cart->add_to_cart(683);
    		//adds deposit:
    		$woocommerce->cart->add_to_cart(675);
    	}
    	if( 497 == $product_id ) {
    		global $woocommerce;
    		$woocommerce->cart->add_to_cart(683);
    		//adds deposit:
    		$woocommerce->cart->add_to_cart(2601);
    	}
    	
    	if( 2581 == $product_id ) {
    		global $woocommerce;
    		//adds shipping:
    		$woocommerce->cart->add_to_cart(683);
    		//adds deposit:
    		$woocommerce->cart->add_to_cart(2601);
    	}
    	
    	if( 2579 == $product_id ) {
    		global $woocommerce;
    		//adds shipping:
    		$woocommerce->cart->add_to_cart(683);
    	}
    	
    	if( 685 == $product_id ) {
    		CRG_remove_product_from_cart(683);
    		CRG_remove_product_from_cart(686);
    	}
    	if( 683 == $product_id ) {
    		CRG_remove_product_from_cart(685);
    		CRG_remove_product_from_cart(686);
    	}
    	if( 686 == $product_id ) {
    		CRG_remove_product_from_cart(685);
    		CRG_remove_product_from_cart(683);
    	}
    }
}

function CRG_remove_product_from_cart($prod_to_remove) {

		// Cycle through each product in the cart
		foreach( WC()->cart->cart_contents as $prod_in_cart ) {
			// Get the Variation or Product ID
			$prod_id = ( isset( $prod_in_cart['variation_id'] ) && $prod_in_cart['variation_id'] != 0 ) ? $prod_in_cart['variation_id'] : $prod_in_cart['product_id'];

			// Check to see if IDs match
			if( $prod_to_remove == $prod_id ) {
				// Get it's unique ID within the Cart
				$prod_unique_id = WC()->cart->generate_cart_id( $prod_id );
				// Remove it from the cart by un-setting it
				unset( WC()->cart->cart_contents[$prod_unique_id] );
			}
		}
}