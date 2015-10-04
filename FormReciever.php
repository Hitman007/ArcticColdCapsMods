<?php

$listOfPostFieldNames = array();

foreach (array_keys($_POST) as $fieldName){
 array_push($listOfPostFieldNames, $fieldName);
 
 //uncomment to see:
 //echo $fieldName . "<br />";
}

foreach($listOfPostFieldNames as $fieldName){
 //do stuff here
 
}


?>
