<?php

  echo $_SERVER['REQUEST_METHOD'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>