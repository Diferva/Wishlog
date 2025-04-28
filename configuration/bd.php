<?php
     class bd{
        public static $instancia = null;
            public static function crearInstancia(){
              if( !isset(self::$instancia)){      
                try {
                    $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                    self::$instancia = new PDO('mysql:host=localhost;port=3307;dbname=wishlog', 'root', '', $opciones);
                    } catch(PDOException $e) {
                    echo "Error de conexión: " . $e->getMessage();
                    }
              } return self::$instancia;
            }
    }
?>