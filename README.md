# Concesionario
Mi primer MVC con php
 Gestión de Concesionarios
Aplicación que gestiona varios concesionarios de coches, los coches en stocks, distribución, clientes y ventas.
En la primera versión hice un crud sencillo para crear, editar y borrar clientes funcionando. 
En una segunda versión lo adapté al modelo vista controlador y añadí controlador y modelo de vehículos. 
La tercera versión añade ventas, donde se relacionan cliente, coche y concesionario.
La venta se hace desde un concesionario, eligiendo cliente y coche de ambos select que muestran los clientes y coches de la base de datos.
Los coches y los clientes se podrán crear, modificar y eliminar, accedemos directamente a ellos desde el menú común de todas las páginas.  
La arquitectura del proyecto usa un modelo vista controlador con una configuración muy sencilla y no muy difícil de entender.
Los scripts que manejan la configuración son:
config/config.php
<?php
//controlador principal. Su metodo index sera el 'home'
define("CONTROL_PRINCIPAL", "Vehiculos");
define("ACCION_PRINCIPAL", "index");
?>
config/db.php
<?php
class Conectar{
  public static function conexion(){
    $conexion = mysqli_connect('localhost', 'root', '', 'concesionario');
    return $conexion;
  }
}
?>
core/rutas.php
<?php
function cargarControlador($controlador)
{
  $nombreControlador=ucwords($controlador)."Controlador";
  $archivoControlador='controlador/'. ucwords($controlador).'.php';
  if(!is_file($archivoControlador)){
    $archivoControlador='controlador/'.CONTROL_PRINCIPAL.'.php';
  }
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
index.php
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
 ?>
La facilidad de trabajar sobre este patrón facilita la creación de nuevos modelos (clases con la conexión a la BBDD y los métodos con las sentencias SQL) y controladores (clases que llaman a los métodos de los modelos y llamadas a las vistas)
Por el momento la aplicación muestra mediante la sentencia SELECT los listados de clientes, coches, clientes, concesionarios y marcas.

 $sql= "SELECT coches.cod, coches.nombre, marca.nombre as marca, coches.modelo FROM `coches` INNER JOIN `marca` on coches.marca=marca.id_marca";
(sentencia  multitabla que trae el nombre de la marca en lugar de su código)

También se pueden agregar y borrar clientes, marcas (ya que solo se pueden añadir coches si ya existe la marca) y coches.
