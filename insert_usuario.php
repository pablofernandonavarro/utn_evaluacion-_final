<?php
include_once("conexion.php");
include_once("modelo.usuario.php");
include_once("usuario.controlador.php");

$guardarUsuarios = new ctrUsuarios();
$guardarUsuarios->ctrGuardarUsuario();


include_once("enviar_mail.php");

?>