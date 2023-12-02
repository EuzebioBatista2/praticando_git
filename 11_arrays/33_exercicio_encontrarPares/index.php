<?php

  function encontrarPares($arr)
  {
    if(count($arr) > 0)
    {
      $even_array = [];

      foreach ($arr as $value)
      {
        if ($value % 2 === 0) // If the values inside array are even
        {
          array_push($even_array, $value);
        }
      }

      return $even_array;
    }
    else
    {
      echo "O array informado não possui valores.";
    }
  }