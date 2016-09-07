<?php

 //$existUser = ORM::rowsSesion('getUserByName',array($_POST['user'], Encrypt($_POST['pass'])));
if (!empty($_POST['user']) and !empty($_POST['pass'])) {
    $existUser = ORM::rowsSesion('getUserByName',array($_POST['user'], Encrypt($_POST['pass'])));
    if ($existUser === 1) {
      echo 1;
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <strong>Error!</strong> Existen problemas no se pueden validar las credenciales.
      </div>';
    }
}else {
  echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <strong>Error!</strong> No se permiten campos vacios, los campos son obligatorios.
  </div>';
}
 ?>
