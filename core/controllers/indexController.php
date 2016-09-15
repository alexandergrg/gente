<?php
//require_once(CORE. 'Vista.php');
//include_once(HTML_DIR . 'index/index.php');

/**
 *
 */

class indexController
{

  public function index(){
    //include_once(HTML . 'index/index.php');
    //var_dump ($_SESSION['app_session']);
    $usuarios = array(
      1=>array(
        'nombre'=>'Alexander',
        'apellidos'=>'Gonzalez',
      ),
      2=>array(
        'nombre'=>'Alexander',
        'apellidos'=>'Gonzalez',
      ),
      3=>array(
        'nombre'=>'Alexander',
        'apellidos'=>'Gonzalez',
      ),
      4=>array(
        'nombre'=>'Alexander',
        'apellidos'=>'Gonzalez',
      ),
    );
    return Vista::crear('index/index',array(
      'us'=>$usuarios
    ));
  }


  public function insertar(){
    echo 'Insertado correctamente' .'</br>';
  }
}


 ?>
