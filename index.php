<?php

  require_once('core/core.php');

  if (isset($_GET['view'])) {

    if (file_exists('core/controllers' . strtolower($_GET['view']) . 'Controller.php')) {
      include_once ('core/controllers' . strtolower($_GET['view']) . 'Controller.php');
    }else {
      include('core/controllers/errorController.php');
    }
  } else {
    include('core/controllers/indexController.php');
  }


?>
