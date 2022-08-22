<?php
 class cliente{
      var $id_cliente;
      var $nombre;
      var $apellido1;
      var $apellido2;
      var $email;
      var $password;

      function iniciarseccion(string $_id){
        $conex=mysqli_connect('localhost','root',"",'discoteca');
        if($conex)
            {
                $consulta="SELECT * FROM cliente WHERE id_cliente='$_id'";
                $resultado=mysqli_query($conex,$consulta);             
                $filas = mysqli_num_rows($resultado);   
                if($filas)
                {
                    $date=$resultado->fetch_assoc();
                    $this->id_cliente=$date['id_cliente'];
                    $this->email=$date['email'];  
                    $this->nombre=$date['nombre'];
                    $this->apellido1=$date['apellido1'];
                    $this->apellido2=$date['apellido2'];
                    $this->password=$date['pass'];
                }
            }
        }

        function set_nombre(){
            return $this->nombre;
        }
    }
?>