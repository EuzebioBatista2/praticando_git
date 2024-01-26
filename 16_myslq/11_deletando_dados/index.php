<?php
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";

  $conn = new mysqli($host, $username, $password, $database);

  $id = 4;
  $stmt = $conn->prepare("DELETE FROM person WHERE id = ?");
  $stmt->bind_param('i', $id);
  $stmt->execute();

  $conn->close();
