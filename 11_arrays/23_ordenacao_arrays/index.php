<?php
  $arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

  sort($arr);

  print_r($arr);

  echo "<br>";
  
  rsort($arr);
  
  print_r($arr);