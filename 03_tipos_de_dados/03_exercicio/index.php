<?php
  // Number 3
  $number_01 = 3;

  // Number 5
  $number_02 = 5;

  // Number 7
  $number_03 = 7;

  // Calc
  echo $number_01 + $number_02 + $number_03 . '<br>';

  // String 3
  $string_01 = '3';

  // Verify if the variable(INT) is number
  echo 'A variável $number_01 é INT? <br>';

  $result_01 =is_int($number_01);

  if ($result_01) { // True
    echo 'É número <br>';
  } else { // False
    echo 'Não é número <br>';
  }

  // Verify if the variable(String) is number
  echo 'A variável $string_01 é INT? <br>';

  $result_02 = is_int($string_01);

  if ($result_02) { // True
    echo 'É número <br>';
  } else { // False
    echo 'Não é número <br>';
  }




