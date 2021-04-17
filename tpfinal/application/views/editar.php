<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container" id="cuerpo">
  <div class="container mt-2 mb-2 p-3">
    <h1>Editar Mercaderia</h1>
    <h3>Modifica el formulario:</h3>
  </div>

  <div class="container mt-2 mb-2 p-3">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form id="cargar_form" class="" action="<?php echo base_url() ?>Mercaderia/guardar/<?php echo $id ?>" name="cargar_form" method="post" onsubmit="cargarjs(); return false">
          <div class="form-group">
            <label for="nombre"><strong>Nombre:</strong></label>
            <input class="form-control" id="nombre" type="text" name="nombre" value="<?php echo $nombre ?>">
            <span id="errornombre"><?php echo form_error("nombre") ?></span>
          </div>
          <div class="form-group">
            <label for="precio"><strong>Precio:</strong></label>
            <input class="form-control" id="precio" type="int" name="precio" value="<?php echo $precio ?>" placeholder="Sólo el valor">
            <span id="errorprecio"><?php echo form_error("precio") ?></span>
          </div>
          <div class="form-group">
            <label for="tipo"><strong>Tipo:</strong></label>
            <select id="tipo" name="tipo" class="custom-select custom-select">
              <option selected="true" value="<?php echo $tipo ?>">-Permanecer-</option>
              <option value="Pantalon">Pantalon</option>
              <option value="Short">Short</option>
              <option value="Campera">Campera</option>
            </select>
            <span id="errortipo"><?php echo form_error("tipo") ?></span>
          </div>
          <div class="form-group">
            <label for="descripcion"><strong>Descripción:</strong></label>
            <textarea class="form-control rounded" id="descripcion" name="descripcion" rows="4" value="<?php echo $descripcion ?>"><?php echo $descripcion ?></textarea>
            <span id="errordescripcion"><?php echo form_error("descripcion") ?></span>
          </div>


          <div class="custom-file mb-4">
            <input type="file" class="custom-file-input" id="imagen" name="imagen" accept=".png, .jpg, .jpeg">
            <label for="imagen" id="casillaFileName" class="custom-file-label" >Elegir imagen</label>
            <span id="errorimagen"><?php echo form_error("imagen") ?>Opcional</span>
          </div>

          <button class="btn btn-primary mt-2" type="submit" name="guardar" id="boton-stamcar">Guardar</button>
        </form>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>
