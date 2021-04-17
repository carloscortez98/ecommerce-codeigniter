<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container" id="cuerpo">
  <div class="container mt-2 mb-2 p-3">
    <h1>Inicia Sesion!</h1>
    <h3>Completa con tus datos:</h3>
  </div>

  <div class="container mt-2 mb-2 p-3">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form id="iniciar_form" class="" action="<?php echo base_url() ?>Iniciar/enviarAjx" method="post" name="iniciar_form" onsubmit="iniciarAjax(); return false">
          <div class="form-group mt-3 mb-3">
            <label for="email"><strong>Email:</strong></label>
            <input class="form-control" id="email" type="text" name="email" value="">
            <span id="erroremail"><?php echo form_error("email") ?></span>
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="contraseña"><strong>Contraseña:</strong></label>
            <input class="form-control" id="contraseña" type="password" name="contraseña" value="">
            <span id="errorcontraseña"><?php echo form_error("contraseña") ?></span>
          </div>
          <button class="btn btn-primary mt-3 mb-3" type="submit" name="enviar" id="boton-stamcar">Enviar</button>
        </form>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>
