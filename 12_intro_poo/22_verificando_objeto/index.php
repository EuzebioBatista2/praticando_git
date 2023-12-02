<?php
  class Humano {
    public string $name;

    public function falar() {
      echo "Olá";
    }

    public function minha_funcao(string $nome, int $idade ): string
    {
      return "olá";
    }
  }

  $euzebio = new Humano;
  if(is_object($euzebio)) {
    echo "É um objeto <br>";
  }

  echo get_class($euzebio) . "<br>";

  if(method_exists($euzebio, "falar")) {
    echo "Existe o método";
  }