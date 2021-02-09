<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template</title>
    <link rel="stylesheet" href="views/style/style.css">
    <link rel="stylesheet" href="views/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="views/fonts/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/style/style_principal.css">
    <link rel="stylesheet" href="views/style/style_princ_img.css">
    <!--<link rel="stylesheet" href="views/style/style_busqueda.css"/>
    <script src="views/js/buscador.js"></script>
    <script src="views/js/Jquery.dataTables.min.js"></script>-->

  </head>
  <body>
    <?php
    include "modules/pagina_principal.php"
    ?>
    <?php
    include "modules/pag_principal_imagen.php"
    ?>
    <?php 
    include "modules/navegacion.php"
    ?>

  	<section>
  		<?php 
      $mvc = new MvcController();
      $mvc -> enlacesPaginasController();
      ?>
  	</section>
    <?php
    include "modules/conexion.php"
    ?>
    <?php 
    include "conection/conexionDB.php"
    ?>
  </body>
</html>