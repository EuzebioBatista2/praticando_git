<?php
  
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "service_car";

  $conn = new mysqli($host, $username, $password, $database);

  $sql = "SELECT * FROM person";

  $result = $conn->query($sql);

  print_r($result);

  /* $conn->close(); */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<button onclick="<?php echo $conn->query('INSERT INTO person(name, age, gender) VALUES("Carlos",25,"M")'); ?>">Clique aqui</button>
</body>
</html>



