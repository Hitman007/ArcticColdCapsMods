<?php

$listOfPostFieldNames = array();

foreach (array_keys($_POST) as $fieldName){
 array_push($listOfPostFieldNames, $fieldName);
 
 //uncomment to see:
 echo $fieldName . "<br />";
}

foreach($listOfPostFieldNames as $fieldName){
 //do stuff here
 
}
$title = "balls";
$my_post = array(
				'post_title'    => $title,
				'post_content'  => 'This is a daily CL item.',
				'post_type'   => 'InfoForms',
			);
			// Insert the post into the database
			wp_insert_post( $my_post );


?>
