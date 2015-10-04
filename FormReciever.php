<?php

$listOfPostFieldNames = array();

foreach (array_keys($_POST) as $fieldName){
 array_push($listOfPostFieldNames, $fieldName);
 
 //uncomment to see:
 echo $fieldName . "<br />";
}

$title = $_POST['crg-info-form-last-name'] . ", " . $_POST['crg-info-form-first-name'];
$my_post = array(
				'post_title'    => $title,
				'post_content'  => $content,
				'post_type'   => 'InfoForm',
			);
			// Insert the post into the database
			wp_insert_post( $my_post );
