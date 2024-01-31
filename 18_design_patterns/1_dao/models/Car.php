<?php

class Car
{
  private $id;
  private $brand;
  private $km;
  private $color;

  public function __construct()
  {
  }

  public function get_id()
  {
    return $this->id;
  }

  public function set_id($id)
  {
    $this->id = $id;
  }

  public function get_brand()
  {
    return $this->brand;
  }

  public function set_brand($brand)
  {
    $this->brand = $brand;
  }

  public function get_km()
  {
    return $this->km;
  }

  public function set_km(int $km)
  {
    $this->km = intval($km);
  }

  public function get_color()
  {
    return $this->color;
  }

  public function set_color($color)
  {
    $this->color = $color;
  }
}

interface Car_DAO
{

  public function create(Car $car);
  public function findAll();
}
