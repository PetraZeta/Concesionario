<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 m-auto">

      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php session_unset();
      }  ?>
      <h3 class='mx-3 my-5'>Modificar vehículo</h3>

      <div class=" card car-body">
        <div class="row">
          <div class="col-4 text-end">
            <p class='m-2 label'>NOMBRE</p>
            <p class='m-2 label'>MODELO</p>
            <p class='m-2 label'>MARCA</p>
          </div>
          <div class="col-8">
            <form action="index.php?c=vehiculos&a=actualizar" method="POST">
              <div class="form-group m-3 ">
                <input type="hidden" name="cod" class="form-control" value="<?php echo $data["id"]; ?>">
              </div>
              <div class="form-group m-3 ">
                <input type="text" name="nombre" class="form-control" value="<?php echo $data["vehiculos"]["nombre"]; ?>" autofocus>
              </div>
              <div class="form-group m-3 ">
                <input type="text" name="modelo" class="form-control" value="<?php echo $data["vehiculos"]["modelo"]; ?>">
              </div>
              <div class="form-group m-3 ">
                <input type="text" name="marca" class="form-control" value="<?php echo $data["vehiculos"]["marca"]; ?>">
              </div>
              <div class="d-grid m-3 mx-auto px-5">
                <input type="submit" class="btn btn-success btn-lg" value="Guardar Vehículo">
              </div>
            </form>
          </div>
        </div>

      </div>
      <a href="index.php?c=vehiculos&a=coches" class="btn  btn-outline-dark mx-auto my-3" role="button">Volver</a>
    </div>
  </div>
</div>

</div>