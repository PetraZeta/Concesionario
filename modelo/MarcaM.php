<?php
class MarcaM{
  private $db;
  private $marcas;

  public function __construct()
  {
    //establecer conexion con bd e instanciar el array vehiculos
    $this->db=Conectar::conexion();
    $this->marcas=array();

  }
  public function get_marcas(){
    $sql="SELECT * FROM marca"; 
    $resultado=$this->db->query($sql);
    while($row=$resultado->fetch_assoc()){
      $this->marcas[]=$row;
    }
    return $this->marcas;
  }
/*   public function get_marca($id)
  {
    $sql = "SELECT * FROM coches WHERE cod=$id LIMIT 1";
    $resultado = $this->db->query($sql);
    $row = $resultado->fetch_assoc();
    return $row;
  } */
  public function agregar($id_marca, $nombre, $ciudad){
    $resultado=$this->db->query("INSERT INTO marca (id_marca, nombre, ciudad) VALUES ( '$id_marca', '$nombre', '$ciudad')");
    return $resultado;

  }

  public function eliminar($id)
  {
    $resultado = $this->db->query("DELETE FROM marca WHERE id_marca='$id'");
    echo "DELETE FROM marca WHERE id_marca='$id'";
    return $resultado;
  }
}
