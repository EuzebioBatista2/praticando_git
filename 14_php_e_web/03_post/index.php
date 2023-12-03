<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário POST</title>
</head>
<body>
  <form action="cadastro.php" method="post">
    <div>
      <input type="text" name="marca" placeholder="Informe a marca do carro" required>
    </div>
    <div>
      <input type="text" name="preco" placeholder="Informe o preco do carro" required>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>