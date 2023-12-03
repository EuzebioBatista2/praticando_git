<?php
  $validacoes = [];

  if(count($_POST) > 0)
  {

    if(empty($_POST['name'])) $validacoes[] = "Por favor, preencha o nome do usuário!"; // Verify if the name field is empty

    if(empty($_POST['email'])) $validacoes[] = "Por favor, preencha o e-mail do usuário!"; // Verify if the email field is empty

    if($_POST['senha'] != $_POST['confirmacao']) $validacoes[] = "As senhas devem ser iguais!"; // Verify if the password fields are equals
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
  <?php if(count($validacoes) > 0): ?>
    <ul>
      <?php foreach ($validacoes as $value): ?>
        <li><?= $value ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <form action="index.php" method="post">
    <div>
      <input type="text" name="nome" placeholder="Digite o seu nome" value="<?php echo $_POST['nome'] ?? null; ?>">
    </div>
    <div>
      <input type="text" name="email" placeholder="Digite o seu email">
    </div>
    <div>
      <input type="password" name="senha" placeholder="Digite a sua senha">
    </div>
    <div>
      <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>