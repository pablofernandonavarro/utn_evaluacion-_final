<?php
class Conexion{
  static public function conectar(){
      $link = new PDO("mysql:localhost=localhost;dbname=pablo_fernando_navarro","root","");
      $link->exec("set names utf8mb4");
    return $link;
  }  
}