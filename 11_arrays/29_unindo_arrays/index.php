<?php

  $arr_1_10 = range(1, 10);
  $arr_11_20 = range(11,20);

  $union = array_merge($arr_1_10, $arr_11_20);

  print_r($union);