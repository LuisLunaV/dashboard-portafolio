<?php  include "../helpers/validar-users.php" ?>

<?php 
  
 function loginPost( $credentials ){
      
    return authentication( $credentials );

}

// echo '<script>console.log('.json_encode($auth->nombre) . ');</script>';
 ?>
