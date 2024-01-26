<?php
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";

  $conn = new mysqli($host, $username, $password, $database);

  $result = $conn->query("SELECT * FROM person");

  $conn->close();

  /* print_r($result->fetch_assoc()); */

  print_r($result->fetch_all());