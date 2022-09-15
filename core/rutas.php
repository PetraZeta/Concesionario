<?php
function cargarControlador($controlador)
{
  $nombreControlador=ucwords($controlador)."Controlador";
  $archivoControlador='controlador/'. ucwords($controlador).'.php';
  if(!is_file($archivoControlador)){
    $archivoControlador='controlador/'.CONTROL_PRINCIPAL.'.php';
  }
  //echo $archivoControlador;
  require_once $archivoControlador;
  $control=new $nombreControlador();  
  return $control;
}

function cargarAccion($controller, $accion, $id=null, $cod=null){
  if(isset($accion) && method_exists($controller, $accion)){
    if($id==null && $cod==null){
      $controller->$accion();
    }elseif($cod==null){
      $controller->$accion($id);
    }else{
      $controller->$accion($id,$cod);
    }
    
  }else{
    $controller->ACCION_PRINCIPAL();
  }
}
?>