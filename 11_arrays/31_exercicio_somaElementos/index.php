<?php


  function somaElementos($arr)
  {
    $sum = 0; // Sum all

    if(count($arr) > 0) // Verify if array is greater than 0
    {
      foreach ($arr as $value) {
        $sum += $value;
      }

      return $sum;
    }
    else
    {
      echo "O array informado não possui valores.";
    }
  }
