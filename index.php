<?php

//Incluir los archivos 
require_once "config/database.php";

require_once "config/config.php";
require_once "core/routes.php";
require_once "<controllers/ProyectoController.php";

if(isset($_GET['']))

require_once "controllers/ProyectoController.php";
$controlador=new ProyectoController();
$controlador->index();
?>




