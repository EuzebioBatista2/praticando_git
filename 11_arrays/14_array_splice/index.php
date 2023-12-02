<?php
  $arr = [1, 2, 3, 4, 5, 6];

  $removidos = array_splice($arr, 1, 1);

  print_r($removidos);
  echo "<br>";
  print_r($arr);