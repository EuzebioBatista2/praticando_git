<?php
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";

  $conn = new mysqli($host, $username, $password, $database);

  $result = $conn->query("SELECT * FROM person");

  $id = 2;

  $stmt = $conn->prepare("SELECT * FROM person WHERE id > ?");
  $stmt->bind_param('i', $id);
  $stmt->execute();

  $result = $stmt->get_result();

  $data = $result->fetch_all();

  print_r($data);