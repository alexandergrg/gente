<?php
  // SE PREGUNTA SI FUE ENVIADO EL FORMULARIO DEL MÈTODO POST DESDE LOGIN.JS
  if ($_POST) {
    switch (isset($_GET['mode']) ? $_GET['mode'] : null ) {
      case 'login':
        require_once('core/models/accesos.php');
        require_once('core/models/Conexion.php');
        require_once('core/models/ORM.php');
        require_once('core/bin/functions/encrypt.php');
        require_once('core/bin/ajax/goLogin.php');
        break;

      default:
      # code...
        header('location: /sistema');
        break;
    }
  }else {
    header('location: /sistema');
  }
 ?>
