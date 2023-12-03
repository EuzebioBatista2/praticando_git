<?php

  $dataA = new DateTime();
  $dataB = new DateTime();

  $dataA->setDate(1998, 03, 14);
  $dataA->setTime(2, 50, 30);

   $diferenca = $dataA->diff($dataB);

   print_r($diferenca);

   echo $diferenca->format('%y years');