<?php


include_once("models/Car.php");

class Car_DAO_MySQL implements Car_DAO
{
  private $conn;

  public function __construct(PDO $conn)
  {
    $this->conn = $conn;
  }
  public function create(Car $car)
  {
    $brand = $car->get_brand();
    $km = $car->get_km();
    $color = $car->get_color();

    $query = "INSERT INTO cars(brand, km, color) VALUES(:brand, :km, :color)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":brand", $brand);
    $stmt->bindParam(":km", $km);
    $stmt->bindParam(":color", $color);

    try {
      $stmt->execute();
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Error: $error";
    }
  }

  public function findAll()
  {
    $cars = [];
    $query = "SELECT * FROM cars";
    $stmt = $this->conn->prepare($query);

    try {
      $stmt->execute();
      $data_all = $stmt->fetchAll();
      foreach ($data_all as $data) {
        $car = new Car();

        $car->set_id($data["id"]);
        $car->set_brand($data["brand"]);
        $car->set_km($data["km"]);
        $car->set_color($data["color"]);

        $cars[] = $car;
      }

      return $cars;
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Errror: $error";
    }
  }
}
