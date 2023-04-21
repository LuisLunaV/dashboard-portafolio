
<?php

function loginController()
{

   if ($_POST) {

      $user     = strtolower($_POST["username"]);
      $password = $_POST["pass"];
      
      $auth = (object)array(
         "nombre" => $user,
         "pass"   => $password
      );

      $resp = loginPost($auth);

      if (gettype($resp) != "string") {
         session_start();
         $_SESSION["usuario"] = $resp->user;
         header("location:../index.php");
      }
   }
}
?>