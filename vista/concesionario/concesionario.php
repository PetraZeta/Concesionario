<div class="container mt-5 ">
    <div class="row">
        <h3 class='mx-3 my-5 text-center'>Bienvenido al concesionario <?php echo $data["concesionario"]['nombre']; ?> de <?php echo $data["concesionario"]['ciudad']; ?><br> <span class="fs-5">(Codigo <?php echo $id; ?>)</span> </h3>

        <div class="col-md-10 mx-auto">
            <h4 class=" m-3 text-center">LISTA DE COCHES EN STOCK EN <span class="fs-2"><?php echo $data["concesionario"]['nombre']; ?> </span> </h4>
            <!-- pintar vehiculos del concesionario -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Unidades</th>

                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data["concesionarioCoches"] as $dato) { ?>
                        <tr>
                            <td><?php echo $dato['cod']  ?></td>
                            <td><?php echo $dato['nombre']  ?></td>
                            <td><?php echo $dato['marca']  ?></td>
                            <td><?php echo $dato['modelo']  ?></td>
                            <td><?php echo $dato['cantidad']  ?></td>
                            <td>
                                <a href="index.php?c=vehiculos&a=venta&id=<?php echo $id ?>&cod=<?php echo $dato['cod']; ?>" class="btn btn-info" role="button">Vender </a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
        <a href="index.php?c=vehiculos&a=compraDist&id=<?php echo $id ?>" class="btn  btn-outline-dark mx-auto my-3" role="button">Comprar coches</a>
        <!--   listar ventas -->
        <a href="index.php?c=vehiculos&a=listaVentas&id=<?php echo $id ?>" class="btn  btn-outline-dark mx-auto my-3" role="button">Lista de Ventas de <?php echo $data["concesionario"]['nombre']; ?> de <?php echo $data["concesionario"]['ciudad']; ?></a>
    </div>
</div>