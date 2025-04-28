<?php
    session_start();
    require 'bd.php';

    function redireccionar($url, $status, $count = null, $alertType = 'success'){
        $_SESSION['status'] = $status;
        $_SESSION['count'] = $count;
        $_SESSION['alertType'] = $alertType;
        header('location: ' . $url);
        exit(0);
    }
    
    function menAlerta(){
        if (isset($_SESSION['status'])) {
            $count = isset($_SESSION['count']) ? $_SESSION['count'] : '';
            $alertType = isset($_SESSION['alertType']) ? $_SESSION['alertType'] : 'success';
            
            // Mapear el tipo de alerta a los íconos de SweetAlert
            $iconMap = [
                'success' => 'success',
                'danger' => 'error',
                'warning' => 'warning',
                'info' => 'info'
            ];
    
            // Obtener el icono correspondiente al tipo de alerta
            $icon = isset($iconMap[$alertType]) ? $iconMap[$alertType] : 'success';
    
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        text: "'. $_SESSION['status'] .'",
                        icon: "'. $icon .'",
                    });
                });
            </script>';
    
            unset($_SESSION['status']);
            unset($_SESSION['count']);
            unset($_SESSION['alertType']);
        }
    }

    function renderSweetAlertScript() {
        echo <<<HTML
        <script>
        function confirmInactivation(formId) {
          Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#82d616",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, inactivar",
            cancelButtonText: "Cancelar"
          }).then((result) => {
            if (result.isConfirmed) {
              // Envía el formulario directamente sin mostrar el mensaje de éxito
              document.getElementById(formId).submit();
            }
          });
        }
        </script>
        HTML;
    }
    
    function logOutSession(){
        unset($_SESSION['auth']);
        unset($_SESSION['rolUsuarioLogeado']);
        unset($_SESSION['usuarioLogeado']);
    }


    function cotejarId($paramType){

        if(isset($_GET[$paramType])){

           if($_GET[$paramType] != null){
                return $_GET[$paramType];
                    }else{
                        return 'No se encontró Id';
                    } 
            }else{
                return 'No se cotejó Id';
        }
    }
    
?>