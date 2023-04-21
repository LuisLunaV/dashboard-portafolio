<?php
include "../helpers/validar-sesion.php";
validarEstatusSesion();
?>

<?php
include "../includes/header.php";
include "../includes/menu.php";
include "../partials/portafolio-form.php";
include "../includes/footer.php";
?>
<?php
include "../controllers/forms-portafolio/portafolioController.php";
portafolioController();
?>

