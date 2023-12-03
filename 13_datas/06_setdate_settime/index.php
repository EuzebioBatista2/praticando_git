<?php

  $data = new DateTime();

  $data->setDate(1998, 03, 14);
  $data->setTime(2, 50, 30);

  echo $data->format('h:i:s d/m/Y');