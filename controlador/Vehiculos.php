<?php

class VehiculosControlador{
  public function __construct()
  {
    require_once 'modelo/VehiculoM.php';
    require_once 'modelo/MarcaM.php';
    require_once 'modelo/ConcesionarioM.php';
    require_once 'modelo/VentaM.php';
    require_once 'modelo/ClienteM.php';

  }

  public function index(){
   
    $concesionario = new ConcesionarioM();

    $data["titulo"] = "Bienvenido a Carconcesions";

    $data["concesionarios"] = $concesionario->get_concesionarios();

    require_once 'vista/header.php';
    require_once "vista/inicio.php";
    require_once 'vista/footer.php';

  }
  public function catalogo()
  {
    $concesionarios = new ConcesionarioM();

    $vehiculos = new VehiculoM();
    $data["titulo"] = "Lista de Vehiculos";
    $data["vehiculos"] = $vehiculos->get_vehiculos();
    $data["concesionarios"] = $concesionarios->get_concesionarios();
    require_once 'vista/header.php';
    require_once 'vista/vehiculo/listaCoches.php';

    require_once 'vista/footer.php';
  }
  public function verConce($id)
  {
 
  /*   $vehiculos = new VehiculoM();
    $data["vehiculos"] = $vehiculos->get_vehiculos(); */

    $concesionarios = new ConcesionarioM();
    $concesionario = new ConcesionarioM();
    $concesionarioCoches = new ConcesionarioM();


    $data["concesionarioCoches"] = $concesionarioCoches->get_concesionarioCoches($id);
    $data["concesionarios"] = $concesionarios->get_concesionarios();
    $data["concesionario"] = $concesionario->get_concesionario($id);

    $data["titulo"] = "Concesionario: $id";
    require_once 'vista/header.php';
    require_once "vista/concesionario/concesionario.php";
    require_once 'vista/footer.php';
  }
  public function coches(){
    $vehiculos=new VehiculoM();
    $marcas = new MarcaM();
    $concesionarios = new ConcesionarioM();
    $data["concesionarios"] = $concesionarios->get_concesionarios();

    $data["titulo"]="Vehiculos y Marcas";
    $data["vehiculos"] = $vehiculos->get_vehiculos();
    $data["marcas"] = $marcas->get_marcas();
   


    require_once 'vista/header.php';
    require_once 'vista/vehiculo/vehiculo.php';

    require_once 'vista/footer.php'; 
  }
  public function nuevo(){

    //para pintar las marcas existentes en el select
    $marcas = new MarcaM();
    $data["titulo"]="Gestión de Vehículos";

    $data["marcas"] = $marcas->get_marcas();
   
    

    require_once 'vista/header.php';
    require_once "vista/vehiculo/agregarVehiculo.php";
    require_once "vista/vehiculo/agregarMarca.php";

    require_once 'vista/footer.php';

  }

  public function guarda()
  {
    //recibe por POST los datos
    //$id=$_POST['cod'];
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];

    $vehiculos = new VehiculoM();

    $vehiculos->agregar( $nombre, $marca, $modelo);
    $data["titulo"] = "Gestión de Vehículos";
    //hacer todas las validaciones pertinentes
    //para pintar las marcas existentes en el select
    $marcas=new MarcaM();
    $marcas->get_marcas();
    
    $this->coches();

  }
  public function guardaMarca()
  {
    //recibe por POST los datos
    //$id=$_POST['cod'];
    $id = $_POST['id_marca'];
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];

    $marcas = new MarcaM();

    $marcas->agregar($id, $nombre,  $ciudad);
    $data["titulo"] = "Nueva Marca";
    //hacer todas las validaciones pertinentes
    //para pintar las marcas existentes en el select

    //$marcas->get_marcas();
    print_r($_POST);

    $this->index();
  }
  public function modificar($id)
  {
    $vehiculos = new VehiculoM();

    $data["id"] = $id;
    $data["vehiculos"]= $vehiculos->get_vehiculo($id);
    $data["titulo"] = "Gestión de Vehículos";

    require_once 'vista/header.php';
    require_once "vista/vehiculo/modificaVehiculo.php";
    require_once 'vista/footer.php';

  }
  public function actualizar()
  {
    $id = $_POST['cod'];
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];

    $vehiculos = new VehiculoM();

    $vehiculos->modificar($id, $nombre, $marca, $modelo);
    $data["titulo"] = "Gestión de Vehículos";
    //hacer todas las validaciones pertinentes

    $this->index();
  }
  public function eliminar($id)
  {

    $vehiculos = new VehiculoM();
    $vehiculos->eliminar($id);
    $data["titulo"] = "Gestión de Vehículos";
    $this->index(); //vuelta al index vehiculo
  }
  public function eliminarMarca($id)
  {
    $marcas= new MarcaM();

    $marcas->eliminar($id);
    $data["titulo"] = "Gestión de Vehículos";
    $this->index();
  }


  public function comprar($id, $cod)
  { 
/*    las variables vienen por get y se añaden a la tabla distribucion */
    $concesionarios = new ConcesionarioM();
    $concesionarios->agregarCompra($id, $cod);
    $data["titulo"] = "Compra de Vehículos";

    $this->verConce($id); //vuelve a la pagina de conesionario
  }

  public function compraDist($id)
  {
    /*    las variables vienen por get y se añaden a la tabla distribucion */
    $vehiculos = new VehiculoM();
    $data["vehiculos"] = $vehiculos->get_vehiculos();

    $concesionarios = new ConcesionarioM();
    $data["concesionarioCoches"] = $concesionarios->get_concesionarioCoches($id);
    //$concesionarios = new ConcesionarioM();
    $data["concesionario"] = $concesionarios->get_concesionario($id);
    $data["concesionarios"] = $concesionarios->get_concesionarios();


    $data["titulo"] = "Concesionario: $id";
    require_once 'vista/header.php';
    require_once "vista/concesionario/comprar.php";
    require_once 'vista/footer.php';

    $this->verConce($id); //vuelve a la pagina de conesionario
  }



  public function listaVentas($id){
    $concesionarios = new ConcesionarioM();
    $data["concesionario"] = $concesionarios->get_concesionario($id);
    $data["concesionarios"] = $concesionarios->get_concesionarios();

    $ventas = new VentaM();
    $data["ventas"] = $ventas->get_concesionarioVentas($id);
    $data["titulo"] = "Concesionario: $id";
    require_once 'vista/header.php';
    require_once "vista/concesionario/listaVentas.php";
    require_once 'vista/footer.php';
    $this->verConce($id); //vuelve a la pagina de conesionario

  }



  public function venta($id, $cod)
  {
   
    /*    las variables id_conc e id_coche vienen por get y se añaden a la tabla distribucion */
    $vehiculos = new VehiculoM();
    $data["vehiculos"] = $vehiculos->get_vehiculo($cod);

    $clientes = new ClienteM();
    $data['clientes'] = $clientes->get_clientes();

    $concesionarios = new ConcesionarioM();
    $data["concesionario"] = $concesionarios->get_concesionario($id);
    $data["concesionarios"] = $concesionarios->get_concesionarios();

   
  

    $data["titulo"] = "Concesionario: $id solicita la venta del coche $cod";
    require_once 'vista/header.php';
    require_once "vista/concesionario/vender.php";
    require_once 'vista/footer.php';
  }
  public function vender($id, $cod)
  {
    
    $id_cli = $_POST['cliente'];
    $color = $_POST['color'];

    $clientes=new ClienteM();
    $data['clientes'] = $clientes->get_clientes();

    $concesionario = new ConcesionarioM();
    $data["concesionario"] = $concesionario->get_concesionario($id);
    $data["concesionarios"] = $concesionario->get_concesionarios();

    $ventas = new VentaM();
    $ventas->agregarVenta($id,  $id_cli, $cod, $color);
    $ventas->restarStock($id,$cod);

    $data["titulo"] = "Venta de Vehículos";
    $data["message"] = "Venta efectuada correctamente";
    $data["message-tipo"] = "success";
    $this->listaVentas($id); //vuelve a la pagina de conesionario



  }

}

