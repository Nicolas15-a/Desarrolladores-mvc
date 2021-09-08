<?php
class ProyectoController{


    public function  __construct()
    {
    require_once "models/Proyecto.php";

    }
    public function index()
    {

        $proyecto=new Proyecto();
        $data["proyectos"]=$proyecto->listar();
        $data["titulo"]="Proyectos";
        //Cargar Vista
        require_once "views/proyectos/index.php";
    }
    public function insert()
    {

        require_once "views/proyectos/insert.php";
    }
}
?>