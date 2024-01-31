<?php
include_once("db.php");
include_once("dao/Car_DAO_MySQL.php");

$car_dao = new Car_DAO_MySQL($conn);

$cars = $car_dao->findAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <h1 class="text-center my-4">Insira um carro</h1>
        <div class="d-flex justify-content-center my-5">
          <a href="index.php" class="btn btn-outline-primary">Página inicial</a>
        </div>
        <form action="process.php" method="POST">
          <div class="mb-3">
            <label for="brand" class="form-label">Marca do carro:</label>
            <input type="text" class="form-control" name="brand" id="brand" maxlength="100" minlength="3" required aria-describedby="brand_help" placeholder="Insira o nome da marca...">
            <div id="brand_help" class="form-text">Insira uma marca real.</div>
          </div>
          <div class="mb-3">
            <label for="km" class="form-label">Kilometragem:</label>
            <input type="number" class="form-control" name="km" id="km" maxlength="5" required aria-describedby="km_help" placeholder="Insira a kilometragem...">
            <div class="form-text" id="km_help">O campo deve conter até 6 digitos</div>
          </div>
          <div class="mb-3">
            <label for="color" class="form-label">Cor:</label>
            <input type="color" class="form-control form-control-color" value="#563d7c" name="color" id="color" required>
          </div>
          <div class="d-flex justify-content-end gap-2">
            <button type="reset" class="btn btn-secondary">Cancelar</button>
            <button type="submit" class="btn btn-primary">Criar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script>
  $(document).ready(() => {
    $("#brand").on("input", function() {
      $(this).val($(this).val().replace(/[0-9]/g, '').replace(/^\w/, function(char) {
        return char.toUpperCase();
      }));
    })

    $("#km").on("input", function() {
      $(this).val($(this).val().slice(0, 6));
    })
  })
</script>

</html>