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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/ddc011add7.js" crossorigin="anonymous"></script>
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
        <section class="main_video">
            <section style="padding-top: 10px;">
                <div class="contenedor_mayor">
                    <div class="mapeo">
                        <div class="letrero">
                            <p>
                              Encuentrenos:
                            </p>
                        </div>
                        <div class="mapita">
                            <div id="map"></div>
                            <script src="../js/mapapi.js"></script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcms7hxS8yyzM-T09d8Oatt0CBBhKVgd8&callback=iniciarMap"></script>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="direccion">
                            <p>
                              Av. Leguia 1726 Tacna, Peru
                            </p>
                        </div>
                        <div class="horarios">
                            <p>
                              Lunes y Martes <br>
                              15:00 a 23:30  <br>
                              Miercoles a Sabados  <br>
                              15:00 a 23:45 <br>
                              Domingos <br>
                              14:00 a 23:30 
                            </p>
                        </div>
                        <div class="redes">
                            <div class="imagenes_redes">
                                <img class="facebook_logo" src="../img/iconos/logo_fb_facha50px.png" alt="Imagen de logo_fb">
                                
                                <img class="correo_logo" src="../img/iconos/logo_gmail50px_limpio.png" alt="Imagen de logo_correo">
                                
                                <img class="telefono_logo" src="../img/iconos/logo_wspp50px_limpio.png" alt="Imagen de logo_wspp">
                               
                            </div>
                            <div class="names_redes">
                                <div class="facebook">
                                    <p>
                                      @ParadiseClubTACNA 
                                    </p>
                                </div>
                                <div class="correo">
                                    <p>
                                      eddie.fx_97@gmail.com
                                    </p>
                                </div>
                                <div class="telefono">
                                    <p>
                                      +51 927 577 334
                                    </p>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </section>
        </section>
    </main>
</div>
</body>
</html>