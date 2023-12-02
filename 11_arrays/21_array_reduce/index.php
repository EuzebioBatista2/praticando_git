<?php
  $arr = [1, 2, 3, 5, 8, 10];

  function soma($a, $b)
  {
    return $a + $b;
  }

  $result = array_reduce($arr, "soma");

  echo $result;