<?php

  $host = "localhost";
  $db = "agenda";
  $user = "root";
  $pass = "root";

  try {

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    /* Modo de errors */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    /* Erro na conexão */
    $error = $e->getMessage();
    echo "Erro: $error";
  }