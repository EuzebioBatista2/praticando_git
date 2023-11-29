<?php

  class Pessoa {
    public function falar() {
      echo 'Olá pessoa';
    }
  }

  $euzebio = new Pessoa(); // Instantiating the class

  $euzebio->name = 'Euzebio'; // I can put parameters inside the class

  echo $euzebio->name;
  echo '<br>';

  echo $euzebio->falar(); // Calling the function inside the classe