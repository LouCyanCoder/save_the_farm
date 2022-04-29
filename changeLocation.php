<?php
  // Change player location
function changeLocation(){	
  
  global $location;

  echo "Where do you want to go?\n";

  $direction = readline(">> ");
  $direction = strtolower($direction);
  
  if($location === "kitchen" && $direction === "bathroom") {
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  } elseif ($location === "kitchen" && $direction === "woods") {
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = "woods";
  } elseif ($location === "bathroom" && $direction === "kitchen") {
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  } elseif ($location === "woods" && $direction === "kitchen") {
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  } elseif ($direction === "woods" || $direction === "kitchen"|| $direction === "bathroom") {
    echo "You can't go directly to $direction from your current location. Try going somewhere else first.\n";
  } else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }  
}