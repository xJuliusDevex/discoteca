<?php
  session_start();
  $_SESSION['usuario']="empleado";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  href="../style/login_emp.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="d-flex justify-content-center pt-3">
        <div class="col-md-4 formulario">
        <div class="text-center"><img class="perfil" src="/PROYECTO/img/portada/perfil.jpg" class="rounded mx-auto d-block" alt="perfil"></div>
        <form action="../function/valide.php" method="POST">
            <div class="form-group text-center"><h1>INICIAR SECCION</h1></div>
            <div class="form-group text-center" ><label for="usuario">USUARIO</label></div>
            <div class="form-group  mx-sm-4 pt-3 text-center"><input type="email" name="email" placeholder="examples@example.com"></div>
            <div class="form-group text-center"><label for="password">Contraseña</label></div>
            <div class="form-group  mx-sm-4 pt-3 text-center" ><input type="password" name="password" placeholder="************"></div>
            <p class="text-center error"><?php echo $error;?></p>
            <div class="row">
                <div class="col"><input class="btn btn-primary entrar"type="submit"  value="Entrar" name="entrar"></div>    
        </form>
        
        </div>
        
    </section>
    
</body>
</html>