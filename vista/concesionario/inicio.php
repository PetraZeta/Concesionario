<div class="container m-auto">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1 class="my-3 text-center">LISTA DE CONCESIONARIOS</h1>

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
                    foreach ($data["concesionario"] as $dato) { ?>
                        <tr>
                            <td><?php echo $dato['id_conc']; ?></td>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['ciudad']; ?></td>
                            <td>
                                <a href="index.php?c=vehiculos&a=verConce&id=<?php echo $dato['id_conc']; ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>

    </div>
    <div class="d-grid ">
        <a href="index.php?c=vehiculos&a=catalogo" class="btn btn-lg  btn-outline-dark  my-3" role="button">Ver todos los coches del concesionario</a>
    </div>
    </div>