<?php

  function static_value()
  {
    static $x = 0; // Save value 
    $x++; // Accumulates with the previous value
    echo "$x <br>";
  }

  static_value(); // Result 1
  static_value(); // Result 2
  static_value(); // Result 3

  function It_s_not_static_value()
  {
    $x = 0; // Reset value
    $x++; // The accumulated value, however, resets to 0 when a new instance is called.
    echo "$x <br>";
  }

  It_s_not_static_value(); // Result 1
  It_s_not_static_value(); // Result 1
  It_s_not_static_value(); // Result 1