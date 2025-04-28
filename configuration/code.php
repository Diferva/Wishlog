<?php
    require '../configuration/funtions.php';

    if(isset($_POST['registrar'])){

        $conexionBD = bd::crearInstancia();
        $usuarioNuevo=(isset($_POST['usuario']))? trim($_POST['usuario']):"";
        $correo=(isset($_POST['email']))? trim($_POST['email']):"";
        $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
        $rol= "Jugador";
        $estado= 1;
        $terminosAceptados = isset($_POST['terminos']); 

        try {

            if($usuarioNuevo != '' && $correo != '' && $password != '' && $terminosAceptados != ''){
                
                $consulta = $conexionBD->prepare("INSERT INTO usuario (correo, usuario, contraseña, rol, estado) VALUES (:correo, :new_user, :password, :rol, :estado)");
                $consulta->bindParam(':new_user', $usuarioNuevo);
                $consulta->bindParam(':correo', $correo);
                $consulta->bindParam(':password', $password);
                $consulta->bindParam(':rol', $rol);
                $consulta->bindParam(':estado', $estado);
                $consulta->execute();
                
                if($consulta){
                    redireccionar('../vistas/vista-inicio.php','Usuario registrado con éxito.','','success');
                    $usuarioNuevo="";
                    $correo="";
                    $password ="";

                }else{
                    redireccionar('registro.php','El usuario no pudo ser registrado con éxito.','','danger');
                    
                }
                
            }else{
                
                redireccionar('registro.php','Debes completar todos los campos y aceptar los Términos y Condiciones.','','danger');
            }           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }


?>