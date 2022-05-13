<?php

include("models/usuarios.modelo.php");
class ControladorUsuario{

    
    /**funcion de validación de datos de ingreso */
    public function ctrIngresoUsuario(){

        if(isset($_POST['nombreUsuario'])){
            if (preg_match('/^[A-Za-z0-9_]{1,15}$/', $_POST['nombreUsuario']) && preg_match('/^[A-Za-z0-9_]{1,15}$/', $_POST['contrasena'])) {

                $tabla = "usuarios";

                $item = "usuario";
                $valor = $_POST['nombreUsuario'];

                $respuesta = ModeloUsuario::MdlMostrarUsuario($tabla,$item,$valor);

                var_dump($respuesta);

               
            }
            
        }

    }
}