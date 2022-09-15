<div class="container m-auto">
    <div class="row">
        <h3 class='m-3  text-center'> CARCESIONS </h3>
        <h3 class='m-3 text-center'> <?php echo $data["concesionario"]['nombre']; ?> de <?php echo $data["concesionario"]['ciudad']; ?> (Cod: <?php echo $id; ?>)</h3>

        <div class="col-md-10 mx-auto">

            <h4 class="m-4 text-center">LISTA DE COCHES DISPONIBLES PARA DISTRIBUCION</h4>

            <!-- pintar coches -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <!-- 
                        <th>Acciones</th> -->
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
                                <a href="index.php?c=vehiculos&a=comprar&id=<?php echo $id ?>&cod=<?php echo $dato['cod']; ?>" class="btn btn-info" role="button">Comprar</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
        <a href="index.php?c=vehiculos&a=index" class="btn  btn-outline-dark mx-auto my-3" role="button">Volver a Inicio</a>
    </div>
</div>