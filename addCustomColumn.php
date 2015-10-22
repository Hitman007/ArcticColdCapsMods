<?php

//These functions add the INFO SHEET link to the admin backend
add_filter( 'manage_users_columns', 'new_modify_user_table' );
function new_modify_user_table( $column ) {
    $column['userinfo'] = 'User Info';
    return $column;
}

add_filter( 'manage_users_custom_column', 'new_modify_user_table_row', 10, 3 );
function new_modify_user_table_row( $val, $column_name, $user_id ) {
    $user = get_userdata( $user_id );
    $title = $user->last_name . ", " . $user->first_name;
    $form = get_page_by_title( $title, 'OBJECT', 'InfoForm' );
    if($form) {
        $link = "/info-sheet/?user=".$user_id;
        $user_link = "<a href='".get_site_url().$link."' >Info Sheet</a>";
    } else {
        $user_link = "";
    }
    
    switch ($column_name) {
        case 'userinfo' :
            return $user_link;
            break;
        default:
    }
    return $return;
}

add_filter( 'manage_users_columns', 'add_bill_info_column' );
function add_bill_info_column( $column ) {
    $column['billinfo'] = 'Bill Info';
    return $column;
}

add_filter( 'manage_users_custom_column', 'add_bill_info', 10, 3 );
function add_bill_info( $val, $column_name, $user_id ) {
    $user = get_userdata( $user_id );
    //$title = $user->last_name . ", " . $user->first_name;
    //$form = get_page_by_title( $title, 'OBJECT', 'InfoForm' );
    
    $bill_info = <<<OUTPUT
    <input type='checkbox' name='bill_info' id='bill_info' class='bill-info-$user_id' />
    <div id='bill_info_form' class='bill-info-$user_id' style='display: none;'>
    <textarea></textarea>
    </div>
    <script>
    jQuery('document').ready(function() {
        //alert('loaded');
        jQuery('#bill_info').click(function() {
        	jQuery('#bill_info').next("#bill_info_form").show();
        });
    });
</script>
OUTPUT;
    /*
    if($form) {
        $link = "/info-sheet/?user=".$user_id;
        $user_link = "<a href='".get_site_url().$link."' >Info Sheet</a>";
    } else {
        $bill_info = "";
    }
    */
    switch ($column_name) {
        case 'billinfo' :
            return $bill_info;
            break;
        default:
    }
    return $return;
}
