<?php

namespace CustomRayGuns;

//this function will determine who's form is being modified or shown.

function getFormAuthor(){
  
  if (!(is_user_logged_in())){
    return FALSE;
  }
  
  return 5;
}
