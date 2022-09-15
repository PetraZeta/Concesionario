<div class="row m-3">
  <h1 class="text-center py-2"><?php echo $data['titulo'];  ?></h1>

</div>
<div class="container m-auto">
  <div class="row m-2">
    <div class="col-md-6">

      <h3 class='m-3 '>Registro de vehículos</h3>
      <div class="card car-body">
        <form action="index.php?c=vehiculos&a=guarda" method="POST">

          <div class="form-group m-3 ">
            <input type="hidden" name="cod" class="form-control" placeholder="Código" autofocus>
          </div>
          <div class="form-group m-3 ">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group m-3 ">
            <input type="text" name="modelo" class="form-control" placeholder="Modelo">
          </div>
          <div class="form-group m-3 ">
            <select name="marca" class="form-control">
              <option selected>Elige Marca</option>
              <?php $cad = '';
              foreach ($data["marcas"] as $dato) {
                $cad .= "<option value='$dato[id_marca]'>$dato[nombre]</option>";
              }
              echo $cad;
              ?>

            </select>
          </div>


          <div class="d-grid m-3 mx-auto">
            <input type="submit" class="btn btn-lg btn-success btn-lg" value="Guardar Vehículo">

          </div>

        </form>

      </div>
    </div>