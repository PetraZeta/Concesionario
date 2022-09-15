<div class="container mt-5">
    <div class="row">

        <div class="col-md-4 m-auto ">
            <a href="index.php?c=clientes" class="btn btn-lg  btn-outline-dark  my-3" role="button">Volver a la lista</a>
        </div>

        <div class="col-md-8">
            <h3 class='mx-3 my-5'>Registrar Nuevo Cliente</h3>
            <div class="card car-body">
                <form action="index.php?c=clientes&a=guarda" method="POST">

                    <div class="form-group m-3 ">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="apellido" class="form-control" placeholder="apellidos">
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="ciudad" class="form-control" placeholder="ciudad">
                    </div>
                    <div class="form-group m-3 ">
                        <input type="text" name="dni" class="form-control" placeholder="dni">
                    </div>
                    <div class="d-grid m-3 mx-auto">
                        <input type="submit" class="btn btn-success btn-lg" name="save" value="Guardar Usuario">

                    </div>

                </form>
            </div>
        </div>
    </div>


</div>