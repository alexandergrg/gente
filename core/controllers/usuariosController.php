<?php


//require_once(CORE. 'Vista.php');
/**
 *
 */
class usuariosController
{

  public function index(){
    //echo 'Estoy en el metodo index delcontroladore usuarios';
    return Vista::crear('usuarios/index');
  }
}


?>
