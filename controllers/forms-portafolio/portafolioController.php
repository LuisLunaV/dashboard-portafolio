<?php
/**Debemos tener cuidado con las direcciones de los archivos */
require "../database/sentencias.php";

function portafolioController(){

    $sentenciaSql = new SentenciasSql();

    if($_POST){
        $nombreProyecto = isset( $_POST["nombreProyecto"]) ? $_POST["nombreProyecto"]:'';
        $imagenProyecto = isset( $_POST["imagenProyecto"]) ? $_POST["imagenProyecto"]:'';
        $descProyecto   = isset( $_POST["descProyecto"]  ) ? $_POST["descProyecto"]:'';

        $nuevoProyecto = (object)array(
            "proyecto_name" => $nombreProyecto, 
            "proyecto_img"  => $imagenProyecto, 
            "proyecto_desc" => $descProyecto       
        );
      
        $sentenciaSql->insertartRegistro( $nuevoProyecto );
        
        header("Location:../pages/ver-registros.php");

    }

}

?>
