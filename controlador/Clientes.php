<?php
class ClientesControlador{
    public function __construct()
    {
        require_once 'modelo/ClienteM.php';
        require_once 'modelo/ConcesionarioM.php';

    }
    public function index(){
        $clientes=new ClienteM();
        $concesionarios = new ConcesionarioM();
        $data["concesionarios"] = $concesionarios->get_concesionarios();
        $data["titulo"]="Clientes";
        $data["clientes"]=$clientes->get_clientes();
        require_once 'vista/header.php';
        require_once "vista/cliente/cliente.php";
        require_once 'vista/footer.php';
    }
    public function nuevo()
    {
        $concesionarios = new ConcesionarioM();
        $data["concesionarios"] = $concesionarios->get_concesionarios();
        $data["titulo"] = "Agragar nuevo Cliente";
        require_once 'vista/header.php';
        require_once "vista/cliente/agregarCliente.php";
        require_once 'vista/footer.php';
    }

    public function guarda()
    {
        //recibe por POST los datos
        //$id=$_POST['cod'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $ciudad = $_POST['ciudad'];
        $dni = $_POST['dni'];


        $clientes = new ClienteM();
        $concesionarios = new ConcesionarioM();
        $data["concesionarios"] = $concesionarios->get_concesionarios();
        $clientes->agregar($nombre, $apellido, $ciudad, $dni);
        $data["titulo"] = "Gestión de Clientes";
        //hacer todas las validaciones pertinentes

        $this->index();
    }
     public function modificar($id)
    {

        $clientes = new ClienteM();
        $concesionarios = new ConcesionarioM();
        $data["concesionarios"] = $concesionarios->get_concesionarios();
        $data["id"] = $id;
        $data["clientes"] = $clientes->get_cliente($id);
        $data["titulo"] = "Gestión de Clientes";

        require_once 'vista/header.php';
        require_once "vista/cliente/modificarCliente.php";
        require_once 'vista/footer.php';
    }
    public function actualizar()
    {
       // print_r($_POST);

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $ciudad = $_POST['ciudad'];
        $dni = $_POST['dni'];

        $clientes = new ClienteM();

        $clientes->modificar($id, $nombre, $apellido, $ciudad,$dni);
        $data["titulo"] = "Gestión de clientes";
        //hacer todas las validaciones pertinentes

        $this->index();
    }
    public function eliminar($id)
    {
        $clientes = new ClienteM();
        $clientes->eliminar($id);
        $data["titulo"] = "Gestión de clientes";
        $this->index();
    }
}


?>