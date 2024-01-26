<?php
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";

  $conn = new mysqli($host, $username, $password, $database);

  $age = 21;
  $name = "Lais";

  $result = $conn->prepare("UPDATE person SET age = ? WHERE name = ?");
  $result->bind_param('is', $age, $name);
  $result->execute();

  $consult = $conn->prepare("SELECT * FROM person WHERE name = ?");
  $consult->bind_param('s', $name);
  $consult->execute();

  $data = $consult->get_result();
  $user = $data->fetch_row();

  print_r($user);