<div class="col-md-6">

    <h3 class='m-3 '>Registro de nueva Marca</h3>
    <div class="card car-body">
        <form action="index.php?c=vehiculos&a=guardaMarca" method="POST">

            <div class="form-group m-3 ">
                <input type="text" name="id_marca" class="form-control" placeholder="Id Marca">
            </div>
            <div class="form-group m-3 ">
                <input type="text" name="nombre" class="form-control" placeholder=" Nombre" autofocus>
            </div>
            <div class="form-group m-3 ">
                <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
            </div>


            <div class="d-grid m-3 mx-auto">
                <input type="submit" class="btn btn-success btn-lg" value="Guardar Marca">

            </div>

        </form>

    </div>
    <div class="col-md-12 mt-5">
        <a href="index.php?c=vehiculos" class="btn btn-lg btn-outline-dark " role="button">Volver a la lista</a>
    </div>
</div>
</div>
</div>