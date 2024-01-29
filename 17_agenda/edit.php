<?php include_once('templates/header.php') ?>
  <div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html") ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact["id"] ?>">
      <div class="form-group">
        <label for="name" class="form-label">Nome do contato:</label>
        <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Digite o nome do contato..." minlength="3" maxlength="45" required value="<?= $contact["name"] ?>">
        <label for="phone" class="form-label">Número de contato:</label>
        <input type="tel" class="form-control mb-3" name="phone" id="phone" placeholder="Digite o número de contato..." minlength="14" maxlength="15" required pattern="^\(\d{2}\) \d{4,5}-\d{4}" value="<?= $contact["phone"] ?>">
        <label for="observations" class="form-label">Observações:</label>
        <textarea class="form-control mb-3" name="observations" id="observations" cols="30" rows="10" placeholder="Digite suas observações aqui..." required maxlength="255"><?= $contact["observations"] ?></textarea>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>
  </div>
<?php include_once('templates/footer.php') ?>
