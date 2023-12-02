<?php

  class Humano {
    public const OLHOS = 2;

    function get_olhos()
    {
      return self::OLHOS;
    }
  }

  $maria = new Humano;
  echo $maria::OLHOS . "<br>";
