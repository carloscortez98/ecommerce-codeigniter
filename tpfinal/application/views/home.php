<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" id="cuerpo">
  <div class="container mb-2 p-3">
    <h1>Bienvenido a nuestra Web!</h1>
    <h3>Home</h3>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mx-auto" src="<?php echo base_url() ?>../public/images/jeanNegro.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jean Negro</h5>
        <p>Textura</p>
      </div>
    </div>
    <div class="carousel-item" id="divcarrusel">
      <img class="d-block mx-auto" src="<?php echo base_url() ?>../public/images/jeanCeleste.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jean Celeste</h5>
        <p>Textura</p>
      </div>
    </div>
    <div class="carousel-item" id="divcarrusel">
      <img class="d-block mx-auto" src="<?php echo base_url() ?>../public/images/jeanAzul.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jean Azul</h5>
        <p>Textura</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

  <div class="container mt-2 mb-2">
    <div class="row">
      <?php foreach ($mercaderia as $key => $value) { ?>
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
