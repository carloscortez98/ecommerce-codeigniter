<!DOCTYPE html>
<html lang="es-ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>../public/assets/css/estilos.css">
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="<?php echo base_url() ?>../public/assets/js/validaciones.js"></script>
  <script src="<?php echo base_url() ?>../public/assets/js/calculadora.js"></script>
  <script src="<?php echo base_url() ?>../public/assets/js/estilos.js"></script>

  <title><?php echo $titulodepestaña ?></title>
</head>

<body>

  <header class="myHeader">
    <div class="contenedor">
      <a href="<?php echo base_url()?>Home" class="logo">Logo</a>
      <span id="iconoabrir">Ver Menu</span>
      <nav class="navegador">
        <ul>
          <?php if (!$this->session->userdata("email")) { ?>
          <li><a href="<?php echo base_url() ?>Iniciar">Iniciar Sesion</a></li>
          <li><a href="<?php echo base_url() ?>Registro">Registrate</a></li>
          <?php } else { ?>
          <li><a href="<?php echo base_url() ?>PanelDeControl/cerrar">Cerrar Sesion</a></li>
          <li><a href="<?php echo base_url() ?>PanelDeControl">Panel de Control</a></li>
          <?php } ?>
          <li><span id="filtrarjean">Filtrar Jean  ▼ </span>
            <ul id="lista">
              <li><a href="<?php echo base_url()?>Home/pantalones">Pantalones</a></li>
              <li><a href="<?php echo base_url() ?>Home/shorts">Shorts</a></li>
              <li><a href="<?php echo base_url() ?>Home/camperas">Camperas</a></li>
            </ul>
          </li>
          <?php if (!$this->session->userdata("admin")) { ?>
          <li><a href="<?php echo base_url() ?>Contacto">Contacto</a></li>
          <?php } else { ?>
          <li><a href="<?php echo base_url() ?>Mercaderia/cargar">Cargar</a></li>
          <li><a href="<?php echo base_url() ?>Mercaderia">Administrar</a></li>
          <li><a href="<?php echo base_url() ?>Ver">Ver Usuarios</a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </header>

  <main class="myMain">
    <?php echo $contenido; ?>
  </main>
  <footer class="myFooter">
    <p>COPYRIGHT Stamcar - 2020. TODOS LOS DERECHOS RESERVADOS.</p>
  </footer>

</body>
</html>
