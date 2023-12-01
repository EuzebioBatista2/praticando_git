<?php

$arr = ['bola' => 'quadrado', 'bola1' => 'triangulo', 'bola2' => 'retangulo', 'bola3' => 'circulo', 'bola4' => 'losango'];

foreach($arr as $value => $data) { // Array as value name => value object
  echo "$value <br>"; // Key value
  echo "$data <br>"; // Object value
}