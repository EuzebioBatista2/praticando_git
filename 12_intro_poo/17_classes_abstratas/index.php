<?php

  abstract class Test {
    public static function testing_abstract_class() {
      echo "This method is from an abstract class. <br>";
    }

    abstract public function test_2();
  }

  Test::testing_abstract_class();

  class Humano extends Test {
    public function test_2()
    {
      
    }
  }

  $euzebio = new Humano;
  $euzebio->test_2();