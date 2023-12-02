<?php

  class Humano {
    public $idade = 15;
    public $nome = "Laura";

    public function testando() {}
  }

  if(class_exists("Humano")) {
    echo "There is a Humano class.";
  }

  print_r(get_class_vars("Humano"));

  print_r(get_class_methods("Humano"));

