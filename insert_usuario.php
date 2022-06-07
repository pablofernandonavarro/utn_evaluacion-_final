<?php
include_once("conexion.php");
include_once("modelo.usuario.php");
include_once("usuario.controlador.php");

$guardarUsuarios = new Usuario();
$guardarUsuarios->ctrGuardarUsuario();




?>