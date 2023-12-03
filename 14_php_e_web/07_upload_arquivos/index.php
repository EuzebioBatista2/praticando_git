<?php
  if(isset($_FILES)) {
    print_r($_FILES);
  }
  if(isset($_FILES['arquivo'])) {
    $name = $_FILES['arquivo']['name'];
    $array_name = explode(".", $name);
    echo "O nome do arquivo é: " . strtoupper($array_name[0]);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <div>
      <input type="file" name="arquivo">
    </div>
    <div>
      <input type="submit" value="enviar">
    </div>
  </form>
</body>
</html>