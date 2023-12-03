<?php
  $data = new DateTime();

  echo $data->format('d/m/y') . "<br>";

  $data->modify("+2 days");

  echo $data->format('d/m/y') . "<br>";
