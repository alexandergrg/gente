<?php

//include_once(HTML_DIR . 'index/index.php');

/**
 *
 */

class indexController
{

  public function index(){
    //include_once(HTML . 'index/index.php');
    //var_dump ($_SESSION['app_session']);
    return Vista::crear('index/index');
  }


  public function insertar(){
    echo 'Insertado correctamente' .'</br>';
  }
}


 ?>
