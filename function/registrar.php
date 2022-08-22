if($_SESSION['usuario']=="cliente")
    {
        if(isset($_SESSION['id_cliente']))
        {
            header("Location: ../index.php");
        }
        else{
            if(isset($_POST))
            {   
                $email=$_POST['usuario'];
                $password=$_POST['contra'];
                if($_POST['contra1']==$_POST['contra']){
                    $conex=mysqli_connect('localhost','root',"",'discoteca');
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
                else{
                    header("Location: ../index.php");
                }
                
            }
        }
        
    }