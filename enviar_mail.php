<?php
$destino = $_POST['email'];
$asunto = "Datos usuarios";
$desde = "From:" . "UTN";
$texto = $_POST['usuario']."   se a registrado en nuestra pagina web conla siguiente contraseña:  ".$_POST['clave'];
$envio=mail($destino, $asunto, print_r($texto, true), $desde);
if($envio){
    echo "<h1 class='text-center'>"."se a enviado con exito el mail"."<h1>";    
}else{
    echo "<h1 class='btn text-center'>"." Error al enviar mail"."<h1>"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/practicas_utn/index.html">Regresar al Formulario de envio</a>
</body>
</html>

