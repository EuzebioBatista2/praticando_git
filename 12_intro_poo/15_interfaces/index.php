<?php

  interface Caracteristicas {

    public const NOME = "Euzebio";

    public function falar();

  }

  class Humano implements  Caracteristicas {

    public function falar()
    {
      echo "Olá, " . self::NOME;
    }
  }

  $euzebio = new Humano;

  $euzebio->falar();