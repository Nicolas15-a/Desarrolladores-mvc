<?php

class Proyecto{


    private $db;
    private $proyectos;
    public function __construct()
    {

        $this->db=Conexion::conectar();
        
        $this->proyectos=array();
    }

    // listar todos los registros de la tabla

    public function listar(){

        $sql="SELECT * FROM proyecto";
        $resultado=$this->db->query($sql);


        if (!$resultado) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        //si todo esta bien
        while ($row=$resultado->fetch_assoc())
         {
            $this->proyectos[]=$row;
        }
        return $this->proyectos;
    }

    public function insert($nombre,$duracion)
    {
        $sql="INSERT INTO proyecto(nombre,duracion)
              VALUES('$nombre',$duracion)";
        
        $this->db->query($sql);

    }


}



?>
