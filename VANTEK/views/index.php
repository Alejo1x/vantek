<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../images/logo-app.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <script src="../js/scrollreveal.js"></script>
    <title>TechWheels</title>
</head>

<body>
   <?php
      include('layouts/barra-nav.php');
   ?>

   <!-- Sección inicio -->

   <section class="seccion-1" id="inicio">

      <div class="info__mob">
         <h1>¡Bienvenido!</h1>
      </div>
     <div id="info" class="info__inicio" data-aos="zoom-in">
         <H1>TECH-WHEELS</H1>
         <p>Este proyecto consiste en una aplicación móvil nativa. La cual permite registrar y gestionar los datos de una empresa que renta de autos.</p>
     </div>
   </section>

   <!-- Fin de sección inicio -->

   <?php
      include('layouts/acerca-de.php');
   ?>

   <?php
         include('layouts/descargar-app.php');
   ?>
   <?php
   include('layouts/objetivo.php');
   ?> 



<script src="../js/app.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scrollreveal.js"></script>
<script src="../js/aos.js"></script>
<script>
  AOS.init({
   duration: 1000,
   once: true
  });
</script>
</body>
</html>