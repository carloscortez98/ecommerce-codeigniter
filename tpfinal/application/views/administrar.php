<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" id="cuerpo">
  <div class="container mt-2 mb-2 p-3">
    <h1>Mercaderia:</h1>
  </div>
  <div class="container table-responsive mt-2 mb-2">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">Tipo</th>
          <th scope="col">Descripción</th>
          <th class="text-center" scope="col">Modificar</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($mercaderia as $key => $value) { ?>
          <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["nombre"] ?></td>
            <td><?php echo $value["precio"] ?></td>
            <td><?php echo $value["tipo"] ?></td>
            <td><?php echo $value["descripcion"] ?></td>
            <td class="d-flex justify-content-between"><a href="<?php echo base_url() ?>Mercaderia/editar/<?php echo $value["id"] ?>" class="btn btn-info btn-sm">Editar</a><a href="<?php echo base_url() ?>Mercaderia/eliminar/<?php echo $value["id"] ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
