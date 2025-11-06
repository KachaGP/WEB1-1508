<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuarios</title>

  <?php 
    // Detecta si el archivo actual está dentro de la carpeta /logica/
    $basePath = (strpos($_SERVER['SCRIPT_NAME'], '/logica/') !== false) ? '../' : '';
  ?>

  <!-- CSS de Materialize -->
  <link rel="stylesheet" href="<?php echo $basePath; ?>css/materialize.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>css/style.css">

  <!-- JS de Materialize -->
  <script src="<?php echo $basePath; ?>js/materialize.min.js"></script>
</head>
<body>

  <!-- Navbar principal -->
  <nav>
    <div class="nav-wrapper light-blue accent-3" style="height:85px;">
      <a href="<?php echo $basePath; ?>index.php" class="brand-logo" style="margin-left: 40px; font-size: 40px;" > Registro de usuarios 
        <img src="<?php echo $basePath; ?>multimedia/caminando.gif" alt="" style="height: 70px; width: auto; vertical-align: middle;">
          <a href="<?php echo $basePath; ?>https://kachagp.ct.ws/" class="brand-logo" style="margin-left: 700px; font-size: 30px;" >JUEGO INSANO</a>
      
          <ul id="nav-mobile" class="right hide-on-med-and-down">
     <a href="<?php echo $basePath; ?>logica/create.php" style="margin-right: 40px; font-size: 30px;"><img src="<?php echo $basePath; ?>multimedia/usuario.ico" alt="" style="height: 70px; width: auto; vertical-align: middle;"></a>
      </ul>
    </div>
  </nav>

  <!-- Contenedor principal -->
  <div class="container" style="margin-top: 40px;">
