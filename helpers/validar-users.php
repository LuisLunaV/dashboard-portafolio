<?php 
    function authentication( $auth ){

        $json = file_get_contents("../database/users.json");
        $usuarios = json_decode($json);
        
        // bucle foreach para buscar el objeto que cumple la condición y, si se encuentra, se almacena en 
        // la variable $usuarioEncontrado. 
        $usuarioEncontrado=(object)array();// Creamos un objeto vacio.
        
        foreach ($usuarios as $usuario) {
            if ($usuario->user === $auth->nombre) {
                $usuarioEncontrado = $usuario;
                break;
            }
        }
        
        if( empty($usuarioEncontrado)){
            return "El usuario no existe";
        }

        if($usuarioEncontrado->password != $auth->pass){
                return "Password incorrecto";
            }
            
            return $usuario;
        }
        
        // echo '<script>console.log('.json_encode($usuario) . ');</script>';
 ?>