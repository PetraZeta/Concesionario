<?php
class VentaM
{
    private $db;
    private $ventas;

    public function __construct()
    {
        //establecer conexion con bd e instanciar el array vehiculos
        $this->db = Conectar::conexion();
        $this->ventas = array();
    }
    public function get_ventas()
    {
        $sql = "SELECT * FROM ventas";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->ventas[] = $row;
        }
        return $this->ventas;
    }
    public function get_venta($id)
    {
        $sql = "SELECT * FROM ventas WHERE id_conc='$id' LIMIT 1";
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
    public function get_concesionarioVentas($id){
        $sql = "SELECT cliente.nombre as cliente, coches.nombre as coche,  marca.nombre as marca,coches.modelo as modelo, color, fecha FROM `ventas` INNER JOIN cliente on cliente.id=ventas.cliente INNER join coches on coches.cod=ventas.coche INNER JOIN marca on marca.id_marca=coches.marca WHERE concesionario='$id'";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->ventas[] = $row;
        }
        return $this->ventas;
    }
    public function agregarVenta($id, $id_cli, $coche, $color)
    {
        $resultado = $this->db->query("INSERT INTO ventas (concesionario, cliente,coche,color,fecha) VALUES ( '$id', '$id_cli', '$coche','$color', CURDATE())");

        return $resultado;
    }
    public function restarStock($id,$cod){
        $resultado = $this->db->query(
        "UPDATE `distribucion` SET `cantidad`= SUM(cantidad)-1 WHERE concesionario = '$id' and coche=$cod");

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
