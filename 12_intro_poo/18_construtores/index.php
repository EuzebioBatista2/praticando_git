<?php

  class Car {
    public $doors;
    public $color;
    public $brand;

    function __construct($doors, $color, $brand)
    {
      $this->doors = $doors;
      $this->color = $color;
      $this->brand = $brand;
    }

    public function get_doors()
    {
      return $this->doors;
    }
  }

  $ferrari = new Car(4, 'Red', 'Toyota');
  echo $ferrari->get_doors();