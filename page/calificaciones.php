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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paradise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ddc011add7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="comentario_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">
</head>
<body class="contenedor none">
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
                <li class="col"><a class="deco" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user-large"></i>  <?php echo $cliente->set_nombre();?></a>
                <ul class="dropdown-menu row nav_ul">
                <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#miperfil">Mi perfil</a></li>
              <li><a class="dropdown-item " href="../function/cerrar_session.php">cerrar seccion</a></li>

                </ul>
                <?php endif; ?>
            </ul>
            
        </nav>
    </header>
   <main class="main main_calificaion">
    <section class="contenido">
        <div class=contenido_img_container><img src="../img/calificacion/post_it417px.png" alt="">
        <div class="contenido_form">
                <h1>Dejanos tu comentario    </h1>
                <form action="#" method="post">
                    <label for="form_comentario2">Apreciamos tus experiencias</label>
                <textarea name="form_comentario2" id="" cols="30" rows="10" style="height:100px;"></textarea>               
                 <input type="submit" class="btn_save" value="Guardar"> 
                </form>
            </div></div>
            
    </div>
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
    
    
    
</body>
</html>