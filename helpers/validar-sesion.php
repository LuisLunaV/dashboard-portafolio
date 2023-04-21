<?php 
    function validarEstatusSesion(){
        session_start();
        if(!isset($_SESSION["usuario"])){
        header("location:pages/login.php");
      }
    }
 ?>