
<?php
include('./class/cliente.php');
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
    <link rel="stylesheet" href="./style/style.css">
</head>
<body class="contenedor">
    <header class="header">
        <nav class="header_nav container-fluid" >
            <ul class="nav row ">
                <li class="col"><a class="deco" href="./page/carta.php">CARTA</a></li>
                <li  class="col"><a  class="deco" href="./page/eventos.php">EVENTOS</a></li>
                <li  class="col"> <a class="deco" href="./page/calificaciones.php">CALIFICACIONES</a></li>
                <li  class="col "><a href="./index.php"> <div class="link_img"> <img src="./img/iconos/logo.jpeg" alt="logo paradise"></div></a></li>
                <li  class="col"><a  class="deco" href="./page/sobre_nosotros.php">SOBRE NOSOTROS</a></li>
                <li  class="col"><a class="deco" href="./page/contactenos.php">CONTACTENOS</a></li>
                <?php  if(isset($_SESSION['id_cliente'])): ?>
                <li class="col"><a class="deco" href="./page/#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user-large"></i> <?php echo $cliente->set_nombre();?></a>
                <ul class="dropdown-menu row nav_ul">
                    <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#miperfil">Mi perfil</a></li>
                    <li><a class="dropdown-item " href="./function/cerrar_session.php">cerrar seccion</a></li>

                </ul>
                <?php endif; ?>
            </ul>
            
        </nav>
    </header>
       

    <main class="main">
    
        <section class="main_video">
            <div class="mydiv animate-bg">
                <div class="item4">
                    <video autoplay muted loop height="100%" width="100%"><source src="video/video_restobar2.mp4" type="video/mp4"></video>
                </div>  
            </div>
            <?php if(isset($_SESSION['id_cliente'])==false): ?>
            <div class="contenedor_botones">
                <button class="btn1" type="button" data-bs-toggle="modal" data-bs-target="#login">Iniciar Seccion</button>
                <div class="modal" tabindex="-1" id="login" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title align-content-center">INICIAR SECCION</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class ="row g-3" action="./function/valide.php" method="POST">
                            <div class="col-12">
                                <label for="Usuario">correo:</label>
                                <input type="email" placeholder="example@gmail.com" name="email">
                            </div>
                            <div>
                                <label for="Password">contraseña:</label>
                                <input type="password" placeholder="***********" name="password">
                            </div>
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-secondary">Entrar</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                <button class="btn2" type="button" data-bs-toggle="modal" data-bs-target="#register">Registrarse</button>
                <div class="modal" tabindex="-1" id="register" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title align-content-center">INICIAR SECCION</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class ="row g-3" action="./function/registrar.php" method="POST">
                            <div class="col-12">
                                <label for="nombre">Nombre:</label>
                                <input type="text"  name="nombre">
                            </div>
                            <div class="col-12">
                                <label for="apellido1">Apelido Paterno:</label>
                                <input type="text"  name="apellido">
                            </div>
                            <div class="col-12">
                                <label for="apellido2">Apellido Materno:</label>
                                <input type="text"  name="apellido2">
                            </div>
                            <div class="col-12">
                                <label for="Usuario">correo:</label>
                                <input type="email" placeholder="example@gmail.com" name="usuario">
                            </div>

                            <div>
                                <label for="contra">Contraseña:</label>
                                <input type="password" placeholder="***********" name="contra">
                            </div>
                            <div>
                                <label for="contra1">Contraseña:</label>
                                <input type="password" placeholder="***********" name="contra1">
                            </div>
                            
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-secondary">Entrar</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </section>
        <?php
    if(isset($_SESSION['id_cliente'])): ?>
    <div class="modal" tabindex="-1" id="miperfil" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title align-content-center">Mi perfil</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class ="row g-3">
                            <div class="col ">
                                <label for="Usuario">Correo:</label>
                                <input type="email"  value="<?php echo $cliente->set_email();?>">
                            </div>
                            <div class= "col">
                                <label for="Password">Contraseña:</label>
                                <input type="password"value="<?php echo $cliente->set_password();?> ">
                            </div>
                            <div>
                                <label for="nombre">Nombre:</label>
                                <input type="text"value="<?php echo $cliente->set_nombre();?> ">
                            </div>
                            <div>
                                <label for="Password">Apellidos:</label>
                                <input type="text"value="<?php echo $cliente->set_apellido();?> ">
                            </div>
                            <div>
                                <button type="button" class="btn btn-success text-center" data-bs-dismiss="modal">Salir</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php endif; ?>
    </main>
</div>
</body>
</html>