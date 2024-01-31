<?php

$host = "localhost";
$db = "daotest";
$user = "root";
$pass = "root";

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch(PDOException $e) {
  $error = $e->getMessage();
  echo $error;
}
