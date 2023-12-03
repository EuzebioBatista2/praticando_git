<?php

  $marca = isset($_POST['marca']) ? $_POST['marca'] : 'Campo vazio';
  $preco = isset($_POST['preco']) ? $_POST['preco'] : 'Campo vazio';

?>

<h1>Cadastro realizado com sucesso(<?= $marca ?>, <?= $preco ?>)</h1>