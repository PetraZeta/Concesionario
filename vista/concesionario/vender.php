<div class="row m-5">
    <div class="col-md-10 mx-auto">

        <h4 class='mx-3 my-5 text-center'>Concesionario <?php echo $data["concesionario"]['nombre']; ?> de <?php echo $data["concesionario"]['ciudad']; ?> </h4>
        <h3 class='mx-3 my-5'>Venta del vehículo <?php echo $data["vehiculos"]['nombre']; ?> modelo <?php echo $data["vehiculos"]['modelo']; ?> </h3>
        <div class="card car-body">
            <form action="index.php?c=vehiculos&a=vender&id=<?php echo $id ?>&cod=<?php echo $cod; ?>" method="POST">
                <div class="form-group m-3 px-3 ">
                    <p>
                        Concesionario <?php echo $data["concesionario"]['nombre']; ?> de <?php echo $data["concesionario"]['ciudad']; ?> (Codigo <?php echo $id; ?>)
                    </p>
                </div>
                <div class="form-group m-3 px-3 ">
                    <p>
                        Vehículo <?php echo $data["vehiculos"]['nombre']; ?> modelo <?php echo $data["vehiculos"]['modelo']; ?> (Codigo <?php echo $cod; ?>)
                    </p>
                </div>
                <div class="form-group m-3 ">
                    <select name="cliente" class="form-control">
                        <option selected>Seleccione Cliente</option>
                        <?php $cad = '';
                        foreach ($data["clientes"] as $dato) {
                            $cad .= "<option value='$dato[id]'>$dato[apellido], $dato[nombre]</option>";
                        }
                        echo $cad;
                        ?>
                    </select>
                </div>
                <div class="form-group m-3 ">
                    <select name="color" class="form-control">
                        <option selected>Seleccione Color</option>
                        <option value='negro'>Negro</option>
                        <option value='blanco'>Blanco</option>
                        <option value='azul'>Azul</option>
                        <option value='amarillo'>Amarillo</option>
                        <option value='verde'>Verde</option>
                        <option value='rosa'>Rosa</option>
                        <option value='vino'>Vino</option>


                    </select>
                </div>


                <div class="d-grid m-3 mx-auto">
                    <input type="submit" class="btn btn-success btn-lg" value="Efectuar Venta">

                </div>

            </form>
            <?php if (isset($data['message'])) { ?>
                <div class="alert alert-<?= $data['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $data['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }  ?>
        </div>
    </div>
</div>