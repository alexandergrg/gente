<?php

   require_once('core/core.php');

  if ($_POST) {
    switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
      case 'login':
      require('core/bin/ajax/goLogin.php');
        //echo 'Llego al login';
        break;

      default:
        header('location: index.php')
        break;
    }

  }else{
    header('location: index.php');
  }

 ?>
