<?php
class ConcesionarioM
{
    private $db;
    private $concesionario;

    public function __construct()
    {
        //establecer conexion con bd e instanciar el array vehiculos
        $this->db = Conectar::conexion();
        $this->concesionario = array();
    }
    public function get_concesionarios()
    {
        $sql = "SELECT * FROM concesionario";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->concesionario[] = $row;
        }
        return $this->concesionario;
        print_r($this->concesionario);
    }
    public function get_concesionario($id)
    {
        $sql = "SELECT * FROM concesionario WHERE id_conc='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
//Función que trae los coches y sus datos por id de concesionario
   public function get_concesionarioCoches($id)
  {
 
    $sql = "SELECT concesionario.ciudad, concesionario.nombre, distribucion.coche AS 'cod', marca.nombre as 'marca',SUM(distribucion.cantidad) as cantidad, coches.nombre,coches.modelo FROM concesionario INNER JOIN distribucion on concesionario.id_conc=distribucion.concesionario INNER join coches on coches.cod=distribucion.coche INNER JOIN marca on marca.id_marca=coches.marca WHERE id_conc='$id' GROUP by coche";
    $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->concesionario[] = $row;
        }
        return $this->concesionario;
  } 
    public function agregarCompra($id, $coche)
    {
        $resultado = $this->db->query("INSERT INTO distribucion (concesionario, coche, cantidad) VALUES ( '$id', '$coche', 1)");
        return $resultado;
    }
/* 
    public function eliminar($id)
    {
        $resultado = $this->db->query("DELETE FROM concesionario WHERE id_conc='$id'");
        echo "DELETE FROM concesionario WHERE id_conc='$id'";
        return $resultado;
    } */
}
