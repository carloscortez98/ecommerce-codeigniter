<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" id="cuerpo">
  <div class="container mt-2 mb-2 p-3">
    <h1>Bienvenido a nuestra Web!</h1>
    <h2>Catálogo</h2>
  </div>

  <?php if ($this->session->userdata("email")) { ?>
    <div class="container p-3" id="calculadoraph">
      <h3>Calculadora</h3>
      <div class="row mt-3">
        <div class="col-md-4" id="columna-calc">
          <div class="">
            <span>Primer Numero</span>
          </div>
          <div class="">
            <input id="operando1" type="text" name="" value="">
          </div>
          <div class="">
            <span>Segundo Numero</span>
          </div>
          <div class="">
            <input id="operando2" type="text" name="" value="">
          </div>
          <div class="">
            <button type="button" name="resetear" onclick="resetear(); return false" class="btn btn-primary mt-3 mb-3" id="boton-stamcar">Borrar</button>
          </div>
        </div>
        <div class="col-md-4" id="columna-calc">
          <div class="">
            <button type="button" name="sumar" onclick="sumar(); return false" class="btn btn-primary mt-2 mb-2" id="boton-stamcar">Sumar</button>
          </div>
          <div class="">
            <button type="button" name="restar" onclick="restar(); return false" class="btn btn-primary mt-2 mb-2" id="boton-stamcar">Restar</button>
          </div>
          <div class="">
            <button type="button" name="multiplicar" onclick="multiplicar(); return false" class="btn btn-primary mt-2 mb-2" id="boton-stamcar">Multiplicar</button>
          </div>
          <div class="">
            <button type="button" name="dividir" onclick="dividir(); return false" class="btn btn-primary mt-2 mb-2" id="boton-stamcar">Dividir</button>
          </div>
        </div>
        <div class="col-md-4 p-4" id="columna-calc">
          <div class="p-4">
            <span>Resultado</span>
            <input id="resultado" type="text" name="" value="">
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <div class="container mt-2 mb-2">
    <div class="row">
      <?php foreach ($camperas as $key => $value) { ?>
      <div class="card m-3" style="width: 20rem;">
        <img class="card-img-top" src="<?php echo base_url('../public/images/jeanicon.jpg')?>" alt="ImagenStamcar">
        <div class="card-body">
          <h5 class="card-title"><?php echo $value["nombre"] ?></h5>
          <p class="card-text"><?php echo $value["descripcion"] ?></p>
          <a href="<?php echo base_url()?>Home/detalle/<?php echo $value["id"] ?>" class="btn btn-primary" id="boton-stamcar">Ver detalle</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
