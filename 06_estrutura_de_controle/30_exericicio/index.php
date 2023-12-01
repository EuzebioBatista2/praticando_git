<?php

function verificarCategoria($categoria)
{
  switch($categoria) {
    case 'eletrônicos':
      return "Essa categoria é de produtos eletrônicos";
      break;

    case 'vestuário':
      return "Essa categoria é de produtos de vestuário";
      break;

    case 'alimentos':
      return "Essa categoria é de produtos alimentícios";
      break;

    default:
      return "Categoria desconhecida";
      break;
  }
}