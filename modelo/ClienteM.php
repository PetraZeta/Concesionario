<?php

class ClienteM{
    public function __construct()
    {
        //establecer conexion con bd e instanciar el array clientes
        $this->db=Conectar::conexion();
        $this->clientes=array();
    }
    public function get_clientes()
    {
        $sql = "SELECT * FROM cliente";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->vehiculos[] = $row;
        }
        return $this->vehiculos;
    }
    public function get_cliente($id)
    {
        $sql = "SELECT * FROM cliente WHERE id=$id LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
    public function agregar($nombre, $apellido, $ciudad,$dni)
    {
        $resultado = $this->db->query("INSERT INTO cliente ( nombre, apellido, ciudad, dni) VALUES ( '$nombre', '$apellido', '$ciudad','$dni')");
        return $resultado;
    }
    public function modificar($id, $nombre, $apellido, $ciudad, $dni)
    {
        $resultado = $this->db->query("UPDATE cliente SET  nombre='$nombre', apellido='$apellido', ciudad='$ciudad', dni='$dni' WHERE id=$id");
            echo "UPDATE cliente SET  nombre='$nombre', apellido='$apellido', ciudad='$ciudad', dni='$dni' WHERE id=$id";
        echo $resultado;
        return $resultado;
    }
    public function eliminar($id)
    {
        $resultado = $this->db->query("DELETE FROM cliente WHERE id=$id");
        return $resultado;
    }
}
