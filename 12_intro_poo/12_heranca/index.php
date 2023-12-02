<?php

  class Humano 
  {
    protected $idade = 29;

    public function falar() 
    {
      return "Olá mundo! <br>";
    }

    public function get_idade()
    {
      return $this->idade;
    }
  }

  class Programador extends Humano 
  {
    public function gritar()
    {
      return strtoupper($this->falar());
    }
  }

  $euzebio = new Humano;
  echo $euzebio->falar();

  $mathus = new Programador;
  echo $mathus->falar();
  // echo $mathus->idade; ---> I can't access the property outside the class
  echo $mathus->get_idade();
  echo "<br>";
  echo $mathus->gritar();