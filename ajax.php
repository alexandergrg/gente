<?php

  if ($_POST) {
    switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
      case 'login':
        require('core/bin/ajax/goLogin.php');
        break;

      default:
        # code...
        break;
    }

  }else{
    header('location: index.php');
  }

 ?>
