<?php
function eatSoup(){
	
  global $is_hungry, $has_soup;

  if(!$has_soup) {
    echo "You don't have any cooked food to eat! Maybe try to look around a bit more\n";
  } else {
    echo 'You have eaten the soup!\n';
    $has_soup = FALSE;
    $is_hungry = FALSE;
  }
}