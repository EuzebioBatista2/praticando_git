<?php

  $host = "localhost";
  $db = "service_car";
  $user = "root";
  $pass = "root";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $age = 23;
  $id = 6;
  $stmt = $conn->prepare("UPDATE person SET age=:age WHERE id=:id");
  $stmt->bindParam(":age", $age);
  $stmt->bindParam(":id", $id);

  $stmt->execute();

  $consult = $conn->prepare("SELECT * FROM person WHERE id=:id");
  $consult->bindParam(":id", $id);
  $consult->execute();

  $result = $consult->fetch(PDO::FETCH_ASSOC);

  print_r($result);
