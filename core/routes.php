<?php

function cargarControlador($controlador)
{
    $nombreControlador=ucwords($controlador) . "Controller";
    $archivoControlador="controllers/$nombreControlador.php";

    if(!is_file($archivoControlador)){
        $archivoControlador="controllers/". CONTROLADOR_PRINCIPAL . "php";//Controlador Principal
    }
    require_once $archivoControlador;

    $control=new $nombreControlador;

    return $control;


}

function cargarAccion($controlador,$accion)
{
 if (isset($accion)&&method_exists($controlador,$accion))
 {
     $controlador->accion();
 }
 else{
     $controlador->ACCION_PRINCIPAL();
 }

}







?>