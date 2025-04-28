<?php
    
    require './configuration/funtions.php';

      if(isset($_SESSION['auth'])){
        redireccionar('admin/inicio.php','Usted esta actualmente logeado','','warning');
      }
      $conexionBD = bd::crearInstancia();

      $usuario=(isset($_POST['usuario']))?trim($_POST['usuario']):"";
      $password=(isset($_POST['password']))?trim($_POST['password']):"";
  
      $consulta = $conexionBD->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
      $consulta->bindParam(':usuario', $usuario);
      $consulta->execute();
      $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
          try{

            foreach($resultado as $res){
  
              $usuarioBD=$res['usuario'];
              $passwordBD=trim($res['contraseña']);
              $rol=$res['rol'];
              $estado=$res['estado'];
            
          }
               if ($usuarioBD) {

                      if ($password == $passwordBD/*password_verify($password, $passwordBD)*/) {
                           
                        if($estado != 1){
                            if($rol=='Administrador'){
                              $_SESSION['auth']= true;
                              $_SESSION['rolUsuarioLogeado'] = $rol;
                              $_SESSION['usuarioLogeado'] = $usuarioBD;
                              redireccionar('/admin/inicio.php','Ingreso exitoso','','success');
                            }else{
                              $_SESSION['auth']= true;
                              $_SESSION['rolUsuarioLogeado'] = $rol;
                              $_SESSION['usuarioLogeado'] = $usuarioBD;
                              redireccionar('vistas/vista-inicio.php','Ingreso exitoso','','success');
                            }

                          }else{
                            redireccionar('./index.php','Su usuario se encuentra deshabilitado','','danger');
                          }
                      } else {
                          
                          redireccionar('./index.php','Ingreso invalido','','danger');

                          }
                  } else {

                          redireccionar('./index.php','Usuario no encontrado.','','danger');
                      }
                     
          } catch (PDOException $e) {
              echo "Error: " . $e->getMessage();
          }
  

    
?> 
