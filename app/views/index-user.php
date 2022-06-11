<?php
include_once("../../config.php");
include_once(ROOT . "app/parts/header.php");
include_once(ROOT."app/model/Usuario.php");
$usu = new Usuarios;
$usuarios= $usu::extrerUsuarios();


?>
<div class="container">
  <h1>Lista de Usuarios</h1>

<a href="http://" class="btn btn-dark  ml-auto">Crear Usuario</a>
<div class="col-md-11 mt-2">

    <table class="table table-striped ">
      <thead>
        <tr class="">
          <th>#</th>
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>foto</th>
          <th>Accion</th>
        </tr>
      </thead>
      <?php
      foreach($usuarios as $key=>$usuario){

      ?>
      <tbody>
        <td class=""><?= $key?></td>
        <td class=""><?= $usuario['id']?></td>
        <td class=""><?= $usuario['name']?></td>
        <td class=""><?= $usuario['last_name']?></td>
        <td class=""><?= $usuario['foto']?></td>
        <td class="">
          <a href="http://" class="btn btn-dark">Editar</a>
          <a href="http://" class="btn btn-dark">Borrar</a>
        </td>
        
      </tbody>
     <?php }?>
    </table>
  </div>
</div>

<form action="insert_usuario.php" method="POST">
  <div class="container col-md-6 mt-5 ">
    <fieldset class="card text-dark bg-light p-5">
      <legend>Formulario:</legend>
      <div class="mb-3">
        <label for="Usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario" placeholder="ingrese el usuario">
      </div>
      <div class="mb-3">
        <label for="Clave" class="form-label">Clave</label>
        <input type="text" class="form-control" name="clave" placeholder="ingrese la clave">
      </div>
      <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="ingrese el Nombre">
      </div>
      <div class="mb-3">
        <label for="Apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" placeholder="ingrese el Apellido">
      </div>
      <div class="mb-3">
        <label for="Edad" class="form-label">Edad</label>
        <input type="number" class="form-control" name="edad" placeholder="ingrese la edad">
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="ingrese el Email">
      </div>
      <div class="mb-3">
        <label for="sitio_web" class="form-label">Sitio Web</label>
        <input type="text" class="form-control" name="sitio_web" placeholder="ingrese el sitio Web">
      </div>


      <button type="submit" class="btn btn-primary">Enviar</button>
    </fieldset>
</form>
</div>

<?php

include_once(ROOT . "app/parts/footer.php");
?>