<?php

  $arr = [
    "Matheus" => 29,
    "Pedro" => 18,
    "Joaquim" => 14,
    "Maria" => 12
  ];

  asort($arr);

  print_r($arr);
  echo "<br>";

  ksort($arr);

  print_r($arr);