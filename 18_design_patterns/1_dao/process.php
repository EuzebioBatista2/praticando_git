<?php
  include_once("db.php");
  include_once("dao/Car_DAO_MySQL.php");

  $car = new Car_DAO_MySQL($conn);

  $brand = $_POST["brand"];
  $km = $_POST["km"];
  $color = $_POST["color"];

  $new_car = new Car();
  $new_car->set_brand($brand);
  $new_car->set_km($km);
  $new_car->set_color($color);

  $car->create($new_car);

  header("Location: index.php");
  exit();