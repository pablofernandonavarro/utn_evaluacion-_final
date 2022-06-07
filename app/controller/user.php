<?php
include_once("../config.php");
include_once(ROOT."_config/conexion.php");
include_once(ROOT.'model/Usuario.php');

class controllerUser{
    static public function insertUser()
    {
        if (isset($_POST['usuario'])) {
            $encriptarPassword = crypt($_POST['clave'], '$5$rounds=5000$usesomesillystringforsalt$');
            $datos = array(
                'usuario' => $_POST['usuario'],
                'clave' => $encriptarPassword,
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'edad' => $_POST['edad'],
                'email' => $_POST['email'],
                'sitio_web' => $_POST['sitio_web']               
            );
            $tabla = "usuario";
            $respuesta = controllerUser::insertUser($tabla, $datos);
        }
    }
}
