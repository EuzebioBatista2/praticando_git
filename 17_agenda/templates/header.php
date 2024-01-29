<?php

include_once("config/url.php");
include_once("config/process.php");

/* Limpa a mensagem */
if (isset($_SESSION['msg'])) {
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = '';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de Contatos</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">

  <!-- Inclua a biblioteca Inputmask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
      <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php">
        <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Book">
      </a>
      <div>
        <div class="navbar-nav">
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>/index.php">Agenda</a>
          <a class="nav-link active" href="<?= $BASE_URL ?>/create.php">Adicionar Contato</a>
        </div>
      </div>
    </nav>
  </header>