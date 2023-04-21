<?php
/**Debemos tener cuidado con las direcciones de los archivos */
require "../database/sentencias.php";

function portafolioController(){

    $sentenciaSql = new SentenciasSql();

    if($_POST){
        $nombreProyecto = $_POST["nombreProyecto"];
        $imagenProyecto = $_POST["imagenProyecto"];
        $descProyecto   = $_POST["descProyecto"];

        $nuevoProyecto = (object)array(
            "proyecto_name" => $nombreProyecto, 
            "proyecto_img"  => $imagenProyecto, 
            "proyecto_desc" => $descProyecto       
        );
      
        $sentenciaSql->insertartRegistro( $nuevoProyecto );

    }

}
