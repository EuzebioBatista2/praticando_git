<?php

  class Animal {
    public $name;

    function choose_name($outside_name)
    {
      $this->name = $outside_name;
    }

    function show_name()
    {
      echo $this->name;
    }
  }

  $poodle = new Animal();

  $poodle->choose_name('Luck');

  $poodle->show_name();