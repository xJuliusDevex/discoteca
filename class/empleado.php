<?php
 class empleado{
      var $id_empleado;
      var $id_cargo;
      var $tipo;
      var $nombre;
      var $apellido1;
      var $apellido2;
      var $dni;
      var $dirrecion;
      var $email;
      var $telefono;
      var $password;

      function iniciarseccion(string $_id){
        $conex=mysqli_connect('localhost','root',"",'discoteca');
        if($conex)
            {
                $consulta="SELECT * FROM empleado WHERE id_empleado='$_id'";
                $resultado=mysqli_query($conex,$consulta);             
                $filas = mysqli_num_rows($resultado);   
                if($filas)
                {
                    $date=$resultado->fetch_assoc();
                    $this->id_cargo=$date['id_cargo'];
                    $this->id_empleado=$date['id_empleado'];
                    $this->email=$date['email'];  
                    $this->nombre=$date['nombre'];
                    $this->apellido1=$date['apellido1'];
                    $this->apellido2=$date['apellido2'];
                    $this->dni=$date['dni'];
                    $this->dirrecion=$date['direccion'];
                    $this->password=$date['pass'];
                    $this->telefono=$date['telefono'];
                    $consulta2="SELECT nombre FROM cargo where id_cargo='$this->id_cargo'";
                    $resultado2=mysqli_query($conex,$consulta2);
                    $dato=$resultado2->fetch_assoc();
                    $this->tipo=$dato['nombre'];
                    if($this->tipo=='ADMINISTRADOR'){
                        $em=new empleado;                        
                    }
                    else
                    {
                        if($this->tipo=='MOZO')
                        {
                            $em=new empleado;
                        }
                    }
                }
                else{
                    return $error='Incorrecto el envio';

                }
            }
        }
        function mostrar(){
            echo "<p>$this->nombre</p>";
        }
        
 }
?>