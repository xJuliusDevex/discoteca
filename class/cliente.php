<?php
 class cliente{
      var $id_cliente;
      var $nombre;
      var $apellido1;
      var $apellido2;
      var $email;
      var $password;

      function iniciarseccion(string $_id){
        $conex=mysqli_connect('r98du2bxwqkq3shg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','bjizp31qtm0tnlmi',"itn1a5shytadu8mb",'u3tq9e016g79oekb');

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
        function set_apellido(){
            return "$this->apellido1 $this->apellido2";
        }
        function set_email(){
            return $this->email;
        }
        function set_password(){
            return $this->password;
        }

    }
?>