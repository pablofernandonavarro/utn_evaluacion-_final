<?php
include_once("../../config.php");
require_once(ROOT."app/_config/conexion.php");

class Usuarios
{
    static public function guardarUsuario($tabla, $datos)
    {
           
        $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla(usuario,clave,nombre,apellido,edad,email,sitio_web)values(:USUARIO, :CLAVE, :NOMBRE, :APELLIDO, :EDAD, :EMAIL, :SITIO_WEB)");
      
        $stmt->bindParam(":USUARIO",$datos['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(":CLAVE",$datos['clave'],PDO::PARAM_STR);
        $stmt->bindParam(":NOMBRE",$datos['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(":APELLIDO",$datos['apellido'],PDO::PARAM_STR);
        $stmt->bindParam(":EDAD",$datos['edad'],PDO::PARAM_INT);
        $stmt->bindParam(":EMAIL",$datos['email'],PDO::PARAM_STR);
        $stmt->bindParam(":SITIO_WEB",$datos['sitio_web'],PDO::PARAM_STR);
       
       
        if ($stmt->execute()) {
            
            return "ok";
        } else {
            echo "error";
        }
        $stmt->closeCursor();
        $stmt = null;
    }
   static public function extrerUsuarios(){

    require_once(ROOT."app/_config/conexion.php");


    $stmt= Conexion::conectar()->prepare("SELECT * FROM usuarios");
         
    if ($stmt->execute()) {
        
      
         $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $stmt->closeCursor();
         return $usuarios;
    } else {
        echo "error";
    }
    $stmt->closeCursor();
    $stmt = null;
   
   }

}








