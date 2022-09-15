<?php
class Conectar{
  public static function conexion(){
    $conexion = mysqli_connect('localhost', 'root', '', 'concesionario');
    return $conexion;

  }
}



?>