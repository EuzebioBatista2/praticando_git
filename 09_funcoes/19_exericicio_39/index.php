<?php

  function isPrime($prime_number)
  {
    $number_origin = 2;

    if(is_int($prime_number) && $prime_number > 0) // Number is Integer and positive
    {
      if($prime_number < 2) // Number greater than 2
      {
        return false;
      }
      else
      {
        $root = sqrt($prime_number); // Root the number

        while($number_origin <= (int) $root) // Verify if the number is divided by the root
        {
          if ($prime_number !=  $number_origin) // While number_origin is diffrent the max number
          {
            if ($prime_number % $number_origin === 0) // If the prime_number is divided, return false
            {
              return false;
              break;
            }
          }

          $number_origin++;
        }

        return true;
      }
    }
    else // It's not valid number
    {
      return false;
    }
  }

  echo isPrime(11);