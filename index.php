<?php
require_once "config/config.php";
require_once "core/rutas.php";
require_once "config/db.php";
require_once "controlador/Vehiculos.php";
require_once "controlador/Clientes.php";




//pasamos la url por get con parametros que indiquen controlador y accion (que contiene las vistas)
if(isset($_GET['c'])){
  $controlador=cargarControlador($_GET['c']) ;
  //si existe la accion
  if(isset($_GET['a'])){
    if (isset($_GET['id'])){
      if (isset($_GET['cod'])) {
        cargarAccion($controlador, $_GET['a'], $_GET['id'], $_GET['cod']);
      } else{
        cargarAccion($controlador, $_GET['a'], $_GET['id']);
      }
    }else{
      cargarAccion($controlador,$_GET['a']);
    }
    
  }else{
    cargarAccion($controlador, ACCION_PRINCIPAL);
  }
  
}else{
 
  //si no existe controlador principal cargara el por defecto
  $controlador = cargarControlador(CONTROL_PRINCIPAL);
  $accionTmp=ACCION_PRINCIPAL;
  $controlador->$accionTmp();
}
/* $control=new VehiculosControlador();
$control->index(); */

 ?>

