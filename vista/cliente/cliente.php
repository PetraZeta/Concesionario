<div class="container mt-5 p-5">
  <div class="row">
    <div class="col-md-4  mx-auto">
      <a href="index.php?c=clientes&a=nuevo" class="btn btn-lg  btn-outline-dark  my-3" role="button">Agregar Nuevo Cliente</a>
<!--       <a href="index.php?c=clientes" class="btn btn-lg  btn-outline-dark  my-3" role="button">Volver a la lista</a> -->
    </div>
    <div class="col-md-8">
      <!-- pintar usuarios -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Ciudad</th>
            <th>DNI</th>
            <th>Acciones</th>

          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data["clientes"] as $dato) { ?>
            <tr>
              <td><?php echo $dato['id']  ?></td>
              <td><?php echo $dato['nombre']  ?></td>
              <td><?php echo $dato['apellido']  ?></td>
              <td><?php echo $dato['ciudad']  ?></td>
              <td><?php echo $dato['dni']  ?></td>
              <td>
                <a href="index.php?c=clientes&a=modificar&id=<?php echo $dato['id'] ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                <a href="index.php?c=clientes&a=eliminar&id=<?php echo $dato['id'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>