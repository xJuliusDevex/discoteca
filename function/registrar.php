<?php
session_start();
    if($_SESSION['usuario']=="cliente")
    {
        if(isset($_SESSION['id_cliente']))
        {
            header("Location: ../index.php");
        }
        else
        {
            if(isset($_POST))
            {   
                $email=$_POST['usuario'];
                $nombre=$_POST['nombre'];
                $password=$_POST['contra'];
                $passworda=$_POST['contra1'];
                $apellido1=$_POST['apellido'];
                $apellido2=$_POST['apellido2'];
                
                if($_POST['contra1']==$_POST['contra']){
                    $conex=mysqli_connect('r98du2bxwqkq3shg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	','bjizp31qtm0tnlmi',"itn1a5shytadu8mb",'u3tq9e016g79oekb');

                    if($conex)
                    {
                        $consulta="SELECT * FROM cliente WHERE email='$email'";
                        $resultado=mysqli_query($conex,$consulta);             
                        $filas = mysqli_num_rows($resultado);   
                        if($filas)
                        {
                            $_SESSION['Notificacion']="fallo";
                            header("Location: ../index.php");
                        }
                        else{
                            $insertar="INSERT INTO cliente VALUES ('','$email','$nombre','$apellido1','$apellido2','$password')";
                            $query = mysqli_query($conex,$insertar);
                         header("Location: ../index.php");
                        }
                     }
                    else{
                        header("Location: ../index.php");
                    }     
                } 
            }
        }
    }
?>