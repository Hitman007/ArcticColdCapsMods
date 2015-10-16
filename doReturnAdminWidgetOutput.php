<?php

function doReturnAdminWidgetOutput(){
 
  $widgetOutput = <<<WIDGETOUTPUT
  <div id = "crg-help-widget-image-div">
  </div>
  <div class = "crg-help-widget-item">
	How to add a new info-form
  </div>
  <div class = "crg-help-widget-item">
	How to edit an info-form
  </div>
  <div class = "crg-help-widget-item">
  	How to change a person's email
  </div>
  <div class = "crg-help-widget-item">
  	How to turn recurring billing on and off
  </div>
  <div class = "crg-help-widget-item">
  	Ask Custom Ray Guns a quetion
  </div>
WIDGETOUTPUT;

  return $widgetOutput;
  
}