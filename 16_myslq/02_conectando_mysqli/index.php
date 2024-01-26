<?php

  ini_set('display_errors', 0);
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";


  try {
    $conn = new mysqli($host, $username, $password, $database);

    echo "Conexão bem-sucedida!";
  } catch (Exception $e) {
    echo "Erro na conexão!";
    echo "Erro: " . mysqli_connect_error();
    echo "Erro na conexão! Detalhes: " . $conn->connect_error;
  }
