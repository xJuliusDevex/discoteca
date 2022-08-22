<?php
    session_start();
    if($_SESSION['usuario']=="cliente")
    {
        if(isset($_SESSION['id_cliente']))
        {
            header("Location: ../index.php");
        }
        else{
            if(isset($_POST))
            {   
                $email=$_POST['email'];
                $password=$_POST['password']; 
                $conex=mysqli_connect('r98du2bxwqkq3shg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','bjizp31qtm0tnlmi',"itn1a5shytadu8mb",'u3tq9e016g79oekb');
                if($conex)
                {
                    $consulta="SELECT * FROM cliente WHERE email='$email' && pass='$password'";
                    $resultado=mysqli_query($conex,$consulta);             
                    $filas = mysqli_num_rows($resultado);   
                    if($filas)
                    {
                        $date=$resultado->fetch_assoc();
                        $id_cliente=$date['id_cliente'];
                        $_SESSION['id_cliente']=$id_cliente;
                        header("Location: ../index.php");
                    }
                    else{
                        /*Cuando no encontro nada  */
                        $_SESSION['Notificacion']="fallo";
                        header("Location: ../index.php");
                    }
                }
            }
        }
        
    }
?>