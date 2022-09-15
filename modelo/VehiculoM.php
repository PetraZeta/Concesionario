<?php
class VehiculoM{
  private $db;
  private $vehiculos;

  public function __construct()
  {
    //establecer conexion con bd e instanciar el array vehiculos
    $this->db=Conectar::conexion();
    $this->vehiculos=array();

  }
  public function get_vehiculos(){
    //sentencia multitabla para traer el nombre de la marca en lugar del id
    $sql= "SELECT coches.cod, coches.nombre, marca.nombre as marca, coches.modelo FROM `coches` INNER JOIN `marca` on coches.marca=marca.id_marca"; 
    $resultado=$this->db->query($sql);
    while($row=$resultado->fetch_assoc()){
      $this->vehiculos[]=$row;
    }
    return $this->vehiculos;
  }
  public function get_vehiculo($id)
  {
    $sql = "SELECT * FROM coches WHERE cod=$id LIMIT 1";
    $resultado = $this->db->query($sql);
    $row = $resultado->fetch_assoc();
    return $row;
  }
  public function agregar( $nombre, $marca, $modelo){
    $resultado=$this->db->query("INSERT INTO coches ( nombre, marca, modelo) VALUES ( '$nombre', '$marca', '$modelo')");
    return $resultado;

  }
  public function modificar($id, $nombre, $marca, $modelo)
  {
    $resultado = $this->db->query("UPDATE coches SET  nombre='$nombre', marca='$marca', modelo='$modelo' WHERE cod=$id");
/*     echo "UPDATE coches SET  nombre='$nombre', marca='$marca', modelo='$modelo' WHERE cod=$id)"; */
echo $resultado;
    return $resultado;

  }
  public function eliminar($id)
  {
    $resultado = $this->db->query("DELETE FROM coches WHERE cod=$id");
    return $resultado;
  }
}



?>