<?php
  
  $host = "localhost";
  $db = "service_car";
  $user = "root";
  $pass = "root";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $name = "Pedro";
  $age = 20;
  $gender = "M";
  $stmt = $conn->prepare("INSERT INTO person(name, age, gender) VALUES(:name, :age, :gender)");

  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":age", $age);
  $stmt->bindParam(":gender", $gender);

  $stmt->execute();






