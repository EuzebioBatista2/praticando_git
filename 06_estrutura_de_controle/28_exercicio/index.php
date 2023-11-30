<?php
  function verificarAcesso($idade, $acesso)
  {
    if ($idade >= 18 && $acesso == true) { // True and True
      return "Acesso autorizado";
    } elseif ($idade < 18) { // False
      return "Acesso negado. Idade mínima requerida: 18 anos";
    } elseif ($idade >= 18 && $acesso == false) { // True and False
      return "Acesso negado. Autorização necessária";
    }
  }

echo verificarAcesso(18, false);