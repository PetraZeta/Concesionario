<div class="container my-5 m-auto">
    <div class="row">
        <h3 class='m-3  text-center'>Concesionario <?php echo $data["concesionario"]['nombre']; ?> de <?php echo $data["concesionario"]['ciudad']; ?> (Codigo <?php echo $id; ?>)</h3>

        <div class="col-md-10 mx-auto">

            <h4 class="m-4 text-center">HISTORIAL DE VENTAS</h4>

            <!-- pintar coches -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Vehículo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Fecha</th>
                        <!-- 
                        <th>Acciones</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data["ventas"] as $dato) { ?>
                        <tr>
                            <td><?php echo $dato['cliente']; ?></td>
                            <td><?php echo $dato['coche']; ?></td>
                            <td><?php echo $dato['marca']; ?></td>
                            <td><?php echo $dato['modelo']; ?></td>

                            <td><?php echo $dato['color']; ?></td>
                            <td><?php echo $dato['fecha']; ?></td>

                            <!--  <td>
                                <a href="index.php?c=vehiculos&a=comprar&id=<?php echo $id ?>&cod=<?php echo $dato['cod']; ?>" class="btn btn-info" role="button">Comprar</a>
                            </td> -->
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
        <a href="index.php?c=vehiculos&a=index" class="btn  btn-outline-dark mx-auto my-3" role="button">Volver a Inicio</a>
    </div>
</div>