<?php

  function ordenarNumeros($arr)
  {
    if(count($arr) > 0) 
    {
      sort($arr);
      return $arr;
    }
    else 
    {
      echo "O array informado não possui valores.";
    }
  }

  print_r(ordenarNumeros([3, 2, 1]));