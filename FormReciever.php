<?php

$listOfPostFieldNames = array();

foreach (array_keys($_POST) as $fieldName){
	if ($_POST["$fieldName"] === ""){break;}
	$content = $content . $fieldName . " - ";
	$content = $content . $_POST["$fieldName"];
	$content = $content . "\r\n";
}

$title = $_POST['Last_Name'] . ", " . $_POST['First_Name'];
$my_post = array(	'post_title'    => $title,
			'post_content'  => $content,
			'post_type'   => 'InfoForm',
);
// Insert the post into the database
wp_insert_post( $my_post );
