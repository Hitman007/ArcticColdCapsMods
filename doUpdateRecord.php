<?php

function doUpdateRecord($data){
		$email = $_POST['crg_login_email'];
		$user = get_user_by( 'email', $email );
		$content = $_POST['notes'];
		$title = $_POST['Last_Name'] . ", " . $_POST['First_Name'];
		
		$userdata = array(
			'ID' => $user->ID,
			'first_name' => $_POST['First_Name'],
			'last_name' => $_POST['Last_Name'],
			);
		
		$returnValue = wp_update_user( $userdata );
		
		$form = get_page_by_title( $title, 'OBJECT', 'InfoForm' );
		
		if ($form) {
			$my_post = array(
				'ID'           => $form->ID,
				'post_title'    => $title,
				'post_author' => $user->ID,
				'post_content'  => $content,
				'post_type'   => 'InfoForm',
			);
			
			wp_update_post( $my_post );
			
			foreach($data as $k => $v) {
				update_post_meta($form->ID, $k, $v);
			}
		}else {
			$my_post = array('post_title'    => $title,
				'post_content'  => $content,
				'post_author' => $user->ID,
				'post_type'   => 'InfoForm',
			);
			// Insert the post into the database
			$form_id = wp_insert_post( $my_post );
			
			foreach($data as $k => $v) {
				add_post_meta($form_id, $k, $v);
			}
			
			$link = "/info-sheet/?user=".$user->ID;
			$admin_email = get_bloginfo( 'admin_email' );
			$subject = 'New Registration';
			$body = get_site_url().$link;
			$headers = 'From: '.$title.' <'.$email.'>' . "\r\n";
			
			$sent_message = wp_mail( $admin_email, $subject, $body, $headers );
		}
}
