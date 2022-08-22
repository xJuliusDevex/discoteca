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
                <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#miperfil">Mi perfil</a></li>
                    <li><a class="dropdown-item " href="../function/cerrar_session.php">cerrar seccion</a></li>

                </ul>
                <?php endif; ?>
            </ul>
            
        </nav>
    </header>
    <main class="main">
        <section class="contenedor_txt_imagen "style="padding-top: 10px;">
            <div class="txt">
                <p>
                    Somos un negocio que con el paso del tiempo
                    se busca a mejorar nuestra atención hacia los
                    clientes, para que asi tengan una experiencia 
                    agradable. Empezamos como un pequeño negocio 
                    y vamos implementando, creciento y mejorando 
                    nuestras instalaciones.
                </p>
    
            </div>
            <img class="imagenlocal" src="../img/iconos/sobre_nosotros_imagen.png" alt="Imagen del local">
    
            <div class="contenedor_comentarios">
                
                <img class="perfilcomentario1" src="../img/iconos/perfil150px.png" alt="Imagen del comentario1">
                <div class="comentario1">
                    <p>
                      Nos gustaron mucho los tragos que ordenamos
                      chilcano de hierba luisa y un cocktel que se
                      llamaba Tayta que era dulce con pisco, canela
                      y granadina.
                    </p>
                </div>
    
                <img class="perfilcomentario2" src="../img/iconos/perfil150px.png" alt="Imagen del comentario2">
                <div class="comentario2">
                    <p>
                        El ambiente es bastante amplio, para pasar un
                        buen momento o una previa bastante acogedora,
                        muy economico y buen pisco Sour.
                    </p>
                </div>
    
                <img class="perfilcomentario3" src="../img/iconos/perfil150px.png" alt="Imagen del comentario3">
                <div class="comentario3">
                    <p>
                        Bellisimo lugar ambientado en la cultura peruana,
                        la comida esquisita, ricos tragos. La atencion de
                        primera y junto a la musica en vivo lo hace muy
                        entretenido.
                    </p>
                </div>
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
</div>
</body>
</html>