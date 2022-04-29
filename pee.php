<?php
  
function pee(){
	
  global $location, $needs_to_pee;

  if($location === "bathroom"|| $location === "woods") {
    echo "You relieve yourself.\nAhhh the last drop went into the pants. \n";
    $needs_to_pee = FALSE;
  } else {
    echo "Are you crazy? You can't just piss in here willy, nilly!\nFind a better place!\n";
  }
}