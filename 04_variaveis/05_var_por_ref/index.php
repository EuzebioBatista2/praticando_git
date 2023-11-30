<?php
  $x = 10; // Origin var
  $y =& $x; // Variable pointer

  echo $x; // Same value
  echo '<br>';
  echo $y; // Same value
  echo '<br>';
  echo '<br>';

  $y = 15; // New value

  echo $x; // Same value
  echo '<br>';
  echo $y; // Same value