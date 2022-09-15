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

La facilidad de trabajar sobre este patrón facilita la creación de nuevos modelos (clases con la conexión a la BBDD y los métodos con las sentencias SQL) y controladores (clases que llaman a los métodos de los modelos y llamadas a las vistas)

 $sql= "SELECT coches.cod, coches.nombre, marca.nombre as marca, coches.modelo FROM `coches` INNER JOIN `marca` on coches.marca=marca.id_marca";
(sentencia  multitabla que trae el nombre de la marca en lugar de su código)

También se pueden agregar y borrar clientes, marcas (ya que solo se pueden añadir coches si ya existe la marca) y coches.
