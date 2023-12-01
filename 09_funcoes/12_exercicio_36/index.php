<?php
  function sumEvenNumbers($num_fornecido)
  {
    $num_base = 1; // Origin number
    $sum = 0;

    if (is_int($num_fornecido) && $num_fornecido > 0) // Number greater then 0 and Integer
    {
      while($num_base <= $num_fornecido) // Add up all the even numbers
      {
        if ($num_base % 2 === 0) // Is even?
        {
          $sum += $num_base; // Add up
        }
        $num_base++; // Accumulator
      }

      return $sum;
    } 
    else 
    {
      return "Valor incorreto. O número deve ser positivo e inteiro";
    }
  }

  echo sumEvenNumbers(4);