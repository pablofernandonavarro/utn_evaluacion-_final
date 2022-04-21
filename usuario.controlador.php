<?php
include_once('modelo.usuario.php');

class ctrUsuarios{
    static public function ctrGuardarUsuario()
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
            $respuesta = mdlUsuarios::mdlguardarusuarios($tabla, $datos);
        }
    }
}
