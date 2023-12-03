<?php

  $usuario = [
    'nome' => 'Euzebio',
    'idade' => 25,
    'profissao' => 'Desempregado'
  ];

  if($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
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
  <form action="">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>" required>
    </div>
  </form>
</body>
</html>