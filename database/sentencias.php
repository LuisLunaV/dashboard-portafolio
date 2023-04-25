<?php include "configdb.php"; ?>
<?php 
    class SentenciasSql{
        private $connectionDb;
    
        public function __construct()
        {
        $this->connectionDb = new ConnectionDb();
        }
        public function obtenerRegistros()
        {
                  $sql = "SELECT*FROM proyectos";
          return  $this->connectionDb->ejcutarSentencia($sql);
        }
        public function insertartRegistro($data)
        {    
            $sql = "INSERT INTO proyectos (proyecto_name, proyecto_img, proyecto_desc ) values ('$data->proyecto_name','$data->proyecto_img','$data->proyecto_desc')";
            $this->connectionDb->ejcutarSentencia($sql);
        }

        public function eliminarRegistro( $id ){

            $sql = "DELETE FROM proyectos where Proyecto_id = $id";

            $this->connectionDb->ejcutarSentencia($sql);

        }

        public function actualizarRegistr( $id ){
            // $sql = "UPDATE FROM proyectos where ";
        }
    }
    // echo '<script>console.log('.json_encode($auth->nombre) . ');</script>';

?>
