<?php
  
function pickMushrooms(){
	
  global $location,$has_mushrooms;

  if($location !== 'woods') {
    echo "There aren't any mushrooms to pick here! \nTry it elsewhere.\n";
  } else {
    echo "You've picked some mushrooms.\nHope they're not poisonous\n";
    $has_mushrooms = TRUE;
  }
}  