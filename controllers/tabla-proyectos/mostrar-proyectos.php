<?php include "../database/sentencias.php"; ?>
<?php 
    function mostrarProyectos(){
       $sentencia = new SentenciasSql();
      return $sentencia->obtenerRegistros();
    }
 ?>