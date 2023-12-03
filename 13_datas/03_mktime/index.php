<?php

  $data_nascimento = mktime(02, 20, 30, 03, 14, 1998);

  $data_formatada = date('h:i:s d/m/y', $data_nascimento);

  echo $data_formatada;