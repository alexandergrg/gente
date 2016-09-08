<?php

 //$existUser = ORM::rowsSesion('getUserByName',array($_POST['user'], Encrypt($_POST['pass'])));
 ini_set('session.cookie_lifetime',"3600");
 ini_set('session.gc_maxlifetime',"3600");
session_start();
if (!empty($_POST['user']) and !empty($_POST['pass'])) {
    $existUser = ORM::rowsSesion('getUserByName',array($_POST['user'], Encrypt($_POST['pass'])));
    if (count($existUser) === 1) {
      $_SESSION['app_session'] = $existUser;
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
