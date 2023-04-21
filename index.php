<?php 
 include "helpers/validar-sesion.php";
 validarEstatusSesion();
 ?>
 
<?php include "includes/header.php"; ?>
<div class="container">
<nav class="nav justify-content-center">
        <a class="nav-link active" href="./index.php">Inicio</a>
        <a class="nav-link"  href="./pages/portafolio.php">Subir proyecto</a>
        <a class="nav-link"  href="./pages/ver-registros.php">Ver proyectos</a>
        <a class="nav-link" href="./pages/cerrar.php">Cerrar</a>
    </nav>
</div>
   

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Bienvenido</h1>
      <p class="col-md-8 fs-4">Este es un ejemplo de diseño con PHP</p>
    <hr>
      <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
  </div>


<?php include("includes/footer.php"); ?>

    
