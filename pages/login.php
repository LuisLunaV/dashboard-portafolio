<?php 
 include "../includes/header.php"; 
 include "../partials/login-form.php"; 
 include "../includes/footer.php"; 
 ?>

<?php
include "../services/api-post.php";
include "../controllers/forms-login/form-controller.php";
loginController();
 ?>