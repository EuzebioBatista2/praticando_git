<?php
  $x = 10; // Origin value
  function mudando_x () // Changing the origin value
  {
    global $x; // Origin value
    
    $x = 2; // New value
    
    echo "variavel mudou: $x";
  }

  echo $x;
  echo "<br>";
  mudando_x();
  echo "<br>";
  echo $x;