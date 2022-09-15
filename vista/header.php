<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['titulo']; ?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css?2.0">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/8682e22814.js" crossorigin="anonymous"></script>
</head>
<header>

  <!--   <nav>

    <div class="container-fluid mx-auto  menu">
      <div class="btn-group" role="group">

        <img src="http://localhost/MVC_concesionario/assets/img/logoCARCESIONS1.png" alt="" width="150" height="150">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Concesionarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        
        

          </ul>
        </li>

        <button class="btn  btn-lg dropdown-menu" aria-labelledby="navbarDropdown">
          <a href=" index.php?c=vehiculos" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">Sucursales </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        

            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
           


          </ul>
        </button>


        <button class="btn  btn-lg " type="button">
          <a href="index.php?c=clientes" class="nav-link "> Gestión de Clientes</a>
        </button>


        <button class="btn  btn-lg " type="button">
          <a href="index.php?c=vehiculos&a=coches" class="nav-link "> Gestión de vehiculos</a>
        </button>



      </div>
    </div>

  </nav> -->
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a href="index.php?c=vehiculos" class="nav-link "> <img src="http://localhost/MVC_concesionario/assets/img/logoCARCESIONS1.png" alt="" width="120" height="120"></a>



      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mx-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Concesionarios
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              <?php
              foreach ($data["concesionarios"] as $dato) { ?>
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=verConce&id=<?php echo $dato['id_conc']; ?>"><?php echo $dato['nombre']; ?></a></li>


              <?php }  ?>
            </ul>
          </li>
        </ul>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mx-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciudad
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              <?php
              foreach ($data["concesionarios"] as $dato) { ?>
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=verConce&id=<?php echo $dato['id_conc']; ?>"><?php echo $dato['ciudad']; ?></a></li>


              <?php }  ?>
            </ul>
          </li>
        </ul>
      </div>
   
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link  mx-5" href="index.php?c=vehiculos&a=catalogo">
              Vehículos
            </a>
          </li>
        </ul>
      </div>
      <button class="btn  btn-lg " type="button">
        <a href="index.php?c=clientes" class="nav-link "> Gestión de Clientes</a>
      </button>


      <button class="btn  btn-lg " type="button">
        <a href="index.php?c=vehiculos&a=coches" class="nav-link "> Gestión de vehiculos</a>
      </button>


    </div>
  </nav>

</header>