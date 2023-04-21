<?php
class ConnectionDb
{
    private $DB_HOST = 'localhost';
    private $NAME_DB = 'portafolio';
    private $DB_USER = 'root';
    private $DB_PASS = '17121991';
    private $conexion;

    public function __construct()
    {
        $this->conectarBD();
    }

    public function conectarBD()
    {

        try {
            //Conextamos a la BD  //Recordatorio: evitar los espacios en la liga, es todo junto
            $this->conexion = new PDO("mysql:host=$this->DB_HOST;dbname=$this->NAME_DB", $this->DB_USER, $this->DB_PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {

            echo "Fallo la conexion" . $error;
        }
    }

    public function ejcutarSentencia( $sql ){

        if( strpos($sql,"SELECT*FROM") !== false ){
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        }

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }
}
// echo '<script>console.log('.json_encode($auth->nombre) . ');</script>';
