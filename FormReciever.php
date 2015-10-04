<?php

$listOfPostFieldNames = array();

foreach (array_keys($_POST) as $fieldName){
 array_push($listOfPostFieldNames, $fieldName);
 echo $fieldName . "<br />";
}

foreach($listOfPostFieldNames as $fieldName){
 //do stuff here
 
}


?>
