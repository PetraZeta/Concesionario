<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <h3 class='mx-3 my-5'>Modificar datos del Cliente</h3>
            <div class="card car-body">
                <form action="index.php?c=clientes&a=actualizar" method="POST">


                    <div class="form-group m-3 ">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $data["id"]; ?>">
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $data["clientes"]["nombre"]; ?>" autofocus>
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="apellido" class="form-control" value="<?php echo $data["clientes"]["apellido"]; ?>">
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="ciudad" class="form-control" value="<?php echo $data["clientes"]["ciudad"]; ?>">
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="dni" class="form-control" value="<?php echo $data["clientes"]["dni"]; ?>">
                    </div>

                    <div class="d-grid m-3 mx-auto">
                        <input type="submit" class="btn btn-success btn-lg" value="Guardar Cliente">

                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-8">
            <!-- pintar coches -->

        </div>
    </div>
</div>