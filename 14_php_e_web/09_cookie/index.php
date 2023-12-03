<?php

  setcookie("nome", "euzebio", time() + 3600); // 3600 === 1h

  if(isset($_COOKIE['nome'])) $nome = $_COOKIE['nome'];

  echo $nome;
?>