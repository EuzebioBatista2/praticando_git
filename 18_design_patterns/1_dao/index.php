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
      <div class="col-12 mx-auto my-0">
        <h1 class="text-center my-4">Carros</h1>
        <a href="create.php" class="btn btn-outline-primary my-3 float-end">Adicionar carro</a>
        <table class="table table-light table-hover table-striped border border-1">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Marca</th>
              <th scope="col">Kilometragem</th>
              <th scope="col">Cor</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cars as $car) : ?>
              <tr scope="col">
                <td scope="row"><?= $car->get_id() ?></td>
                <td scope="row"><?= $car->get_brand() ?></td>
                <td scope="row"><?= $car->get_km() ?></td>
                <td scope="row"><?= $car->get_color() ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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