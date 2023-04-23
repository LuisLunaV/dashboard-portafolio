<?php include "./database/sentencias.php"; ?>
<?php
function eliminarRegistro()
{
    if ($_GET) {
        $id = $_GET["borrar"];

        $sentencia = new SentenciasSql();
        $sentencia->eliminarRegistro($id);

        header("Location:../pages/ver-registros.php");

    }
}
// echo '<script>console.log('.json_encode($auth->nombre) . ');</script>';
?>