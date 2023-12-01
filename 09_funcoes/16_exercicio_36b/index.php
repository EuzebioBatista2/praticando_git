<?php
function countVowels($text) 
{
  $vowels_array = ["a", "e", "i", "o", "u"];
  $vowels_amount = 0;

  if (is_string($text)) // Verify if is string
  {
    $letters = str_split($text); // Split the string in array

    foreach($letters as $letter) // Traverse the letters list
    {
      foreach($vowels_array as $vowel) // Traverse the vowels list
      {
        if ($letter === $vowel) // For exemplo: "a" === "a"
        {
          $vowels_amount++;
        }
      }
    }

    return $vowels_amount;
  }
  else // It is not string
  {
    return "Valor informado não é um TEXTO.";
  }
}

