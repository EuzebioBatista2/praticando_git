<?php
  $arr = ["bola" => "futebol", "carro" => "ferrari", "hobby" => "musica", "trabalho" => "programador"];

  if(array_key_exists("bola", $arr))
  {
    echo "existe <br>";
  }

  echo isset($arr["bola"]);