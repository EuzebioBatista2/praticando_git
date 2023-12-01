<?php

function sumDigits($num) 
{
  $result = 0;
  if (is_int($num)) {
    $number_string = (string) $num; // Convert to string
    $string_array = str_split($number_string); // explode the values in an array
    foreach($string_array as $number)
    {
      $result += (int) $number; // Convert the values in int and add up.
    }
    return $result;
  }
}

echo sumDigits(3);