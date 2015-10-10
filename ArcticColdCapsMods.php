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

function auto_login_new_user( $user_id ) {
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);
        $URL = get_site_url() . "/info-sheet/";
        wp_redirect( $URL );
        exit;
    }
  add_action( 'user_register', 'auto_login_new_user' );
