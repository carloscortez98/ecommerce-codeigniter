<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container" id="cuerpo">
  <div class="container mt-2 mb-2 p-3">
    <h1>Registrate!</h1>
    <h3>Completa el formulario:</h3>
  </div>

  <div class="container mt-2 mb-2 p-3">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form class="" action="<?php echo base_url() ?>Registro/enviar" method="post" name="registro_form" onsubmit="registrojs(); return false">
          <div class="form-group mt-3 mb-3">
            <label for="nombre"><strong>Nombre:</strong></label>
            <input class="form-control" id="nombre" type="text" name="nombre" value="">
            <span id="errornombre"><?php echo form_error("nombre") ?></span>
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="email"><strong>Email:</strong></label>
            <input class="form-control" id="email" type="text" name="email" value="">
            <span id="erroremail"><?php echo form_error("email") ?></span>
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="telefono"><strong>Telefono (opcional):</strong></label>
            <input class="form-control" id="telefono" type="text" name="telefono" value="" placeholder="Ej: 1138623183">
            <span id="errortelefono"><?php echo form_error("telefono") ?></span>
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="contraseña"><strong>Contraseña:</strong></label>
            <input class="form-control" id="contraseña" type="password" name="contraseña" value="">
            <span id="errorcontraseña"><?php echo form_error("contraseña") ?></span>
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="confirmar"><strong>Confirmar:</strong></label>
            <input class="form-control" id="confirmar" type="password" name="confirmar" value="">
            <span id="errorconfirmar"><?php echo form_error("confirmar") ?></span>
          </div>
          <button class="btn btn-primary mt-3 mb-3" type="submit" name="enviar" id="boton-stamcar">Enviar</button>
        </form>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>
