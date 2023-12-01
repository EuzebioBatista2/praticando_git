<?php

  function soma($a, $b)
  {
    print_r(func_get_args());
    echo "<br>";
    print_r(func_num_args());
    echo "<br>";

    return $a + $b;
  }

  echo soma(5, 4);