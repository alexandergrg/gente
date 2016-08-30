<?php

  require_once('core/core.php');

  //echo Encrypt('123456');

  //$arr = ORM::getProcedure('getAllUsers');

  //var_dump($arr[0][1]);

  if (isset($_GET['view'])) {

    if (file_exists('core/controllers' . strtolower($_GET['view']) . 'Controller.php')) {
      include_once ('core/controllers' . strtolower($_GET['view']) . 'Controller.php');
    }else {
      include('core/controllers/errorController.php');
    }
  } else {
    include('core/controllers/loginController.php');
  }


?>
