<?php
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";

  $conn = new mysqli($host, $username, $password, $database);

  $result = $conn->query("SELECT * FROM person");

  $name = "Lucas";
  $age = 22;
  $gender ='M';

  $stmt = $conn->prepare("INSERT INTO person(name, age, gender) VALUES(?, ?, ?)");

  $stmt->bind_param('sis', $name, $age, $gender); /* s = string, i = integer, d = double */

  $stmt->execute();