<div class="container mt-5">
  <div class="row">
    <div class="col-md-4  mx-auto">
      <?php if (isset($data['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php session_unset();
      }  ?>
    </div>
  </div>

  <div class="row">
    <h1 class="text-center py-2"><?php echo $data['titulo'];  ?></h1>
    <div class="col-md-6">
      <h4 class="m-4 text-center">LISTA DE COCHES </h4>


      <!-- pintar coches -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Marca</th>

            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data["vehiculos"] as $dato) { ?>
            <tr>
              <td><?php echo $dato['cod']; ?></td>
              <td><?php echo $dato['nombre']; ?></td>
              <td><?php echo $dato['modelo']; ?></td>
              <td><?php echo $dato['marca']; ?></td>

              <td>
                <a href="index.php?c=vehiculos&a=modificar&id=<?php echo $dato['cod']; ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                <a href="index.php?c=vehiculos&a=eliminar&id=<?php echo $dato['cod']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <h4 class="m-4 text-center">LISTA DE MARCAS </h4>


      <!-- pintar marcas-->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Ciudad</th>

            <th>Acciones</th>

          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data["marcas"] as $dato) { ?>
            <tr>
              <td><?php echo $dato['id_marca']; ?></td>
              <td><?php echo $dato['nombre']; ?></td>
              <td><?php echo $dato['ciudad']; ?></td>
              <td>
                <a href="index.php?c=vehiculos&a=eliminarMarca&id=<?php echo $dato['id_marca']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>
      <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-lg btn-outline-dark mx-auto m-3" role="button">Agregar Nuevo Vehículo</a>
      <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-lg btn-outline-dark mx-auto m-3" role="button">Agregar Nueva Marca</a>

    </div>
  </div>
</div>