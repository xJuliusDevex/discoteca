<?php
include('../class/cliente.php');
  session_start();
  $_SESSION['usuario']="cliente";
  //session_destroy();
  if(isset($_SESSION['id_cliente']))
  {
    $cliente=new cliente();
    $cliente->iniciarseccion($_SESSION['id_cliente']);
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paradise</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ddc011add7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" href="../style/style.css">
  </head>
<body class="contenedor">
<header class="header">
        <nav class="header_nav container-fluid" >
            <ul class="nav row ">
                <li class="col"><a class="deco" href="./carta.php">CARTA</a></li>
                <li  class="col"><a  class="deco" href="./eventos.php">EVENTOS</a></li>
                <li  class="col"> <a class="deco" href="./calificaciones.php">CALIFICACIONES</a></li>
                <li  class="col "><a href="../index.php"> <div class="link_img"> <img src="../img/iconos/logo.jpeg" alt="logo paradise"></div></a></li>
                <li  class="col"><a  class="deco" href="./sobre_nosotros.php">SOBRE NOSOTROS</a></li>
                <li  class="col"><a class="deco" href="./contactenos.php">CONTACTENOS</a></li>
                <?php if(isset($_SESSION['id_cliente'])): ?>
                <li class="col"><a class="deco" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user-large"></i> <?php echo $cliente->set_nombre();?></a>
                <ul class="dropdown-menu row nav_ul">
                    <li><a class="dropdown-item " href="#">Mi perfil</a></li>
                    <li><a class="dropdown-item " href="../function/cerrar_session.php">cerrar seccion</a></li>

                </ul>
                <?php endif; ?>
            </ul>
            
        </nav>
    </header>
    <main class="main">
        <div class="carousel" style="margin-top:4rem;">
          <div class="carousel__contenedor">
            <div class="carousel__lista">
              <div class="carousel__elemento">
                <img src="../img/eventos/paradise_2022.jpeg" alt="imagense de eventos">
              </div>
              <div class="carousel__elemento">
                <img src="../img/eventos/paradise_cumpleañero.jpeg" alt="imagense de eventos">
              </div>
              <div class="carousel__elemento">
                <img src="../img/eventos/paradise_fest.jpeg" alt="imagense de eventos">
              </div>
              <div class="carousel__elemento">
                <img src="../img/eventos/paradise_Las_despedida.jpeg" alt="imagense de eventos">
              </div>
            </div>
          </div>
          <div role="tablist" class="carousel__indicadores"></div>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
<script src="../js/carousel.js"></script>
</body>
</html>