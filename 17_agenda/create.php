<?php include_once('templates/header.php') ?>
  <div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html") ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name" class="form-label">Nome do contato:</label>
        <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Digite o nome do contato..." minlength="3" maxlength="45" required>
        <label for="phone" class="form-label">Número de contato:</label>
        <input type="tel" class="form-control mb-3" name="phone" id="phone" placeholder="Digite o número de contato..." minlength="14" maxlength="15" required pattern="^\(\d{2}\) \d{4,5}-\d{4}" >
        <label for="observations" class="form-label">Observações:</label>
        <textarea class="form-control mb-3" name="observations" id="observations" cols="30" rows="10" placeholder="Digite suas observações aqui..." required maxlength="255"></textarea>
        <button type="submit" class="btn btn-primary">Criar</button>
      </div>
    </form>
  </div>
<?php include_once('templates/footer.php') ?>
