<?php

$listOfPostFieldNames = array();

foreach (array_keys($_POST) as $fieldName){
	if (!(isset($_POST["$fieldName"]))){break;}
	$content = $content . $fieldName . " - ";
	$content = $content . $_POST["$fieldName"];
	$content = $content . "\r\n";
}

$title = $_POST['crg-info-form-last-name'] . ", " . $_POST['crg-info-form-first-name'];
$my_post = array(	'post_title'    => $title,
			'post_content'  => $content,
			'post_type'   => 'InfoForm',
);
// Insert the post into the database
wp_insert_post( $my_post );
