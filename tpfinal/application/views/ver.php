<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" id="cuerpo">
  <div class="container mt-2 mb-2 p-3">
    <h1>Usuarios registrados:</h1>
  </div>
  <div class="container table-responsive mt-2 mb-2">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Teléfono</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $key => $value) { ?>
          <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["nombre"] ?></td>
            <td><?php echo $value["email"] ?></td>
            <td><?php if ($value["telefono"] == 0) { echo "No registró número"; } else { echo $value["telefono"]; } ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
