<?php

  function maiorElemento($arr)
  {
    $maior = 0;
    if(count($arr) > 0)
    {
      foreach ($arr as $value)
      {
        if($value > $maior)
        {
          $maior = $value;
        }
      }

      return $maior;
    }
    else 
    {
      echo "O array informado não possui valores.";
    }
  }