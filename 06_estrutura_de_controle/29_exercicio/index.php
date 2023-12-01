<?php
  function calcularDesconto($valor_do_produto, $categoria)
  {
    switch($categoria) {
      case 'eletrônicos': // Discount 10%
        return $valor_do_produto *= 0.90;
        break;

      case 'vestuário': // Discount 20%
        return $valor_do_produto *= 0.80;
        break;

      case 'alimentos': // Discount 5%
        return $valor_do_produto *= 0.95;
        break;

      default: // No discount
        return $valor_do_produto;
        break;
    }
  }
