<?php


//require_once(CORE. 'Vista.php');
/**
 *
 */
class usuariosController
{

  public function index(){
    //echo 'Estoy en el metodo index delcontroladore usuarios';

    //echo var_dump(ORM::getProcedure('spUsuariosPerfilesLista'));
    $usuariosPerfiles = ORM::getProcedure('spusuariosperfileslista');
    return Vista::crear('usuarios/index',array(
      'users'=>$usuariosPerfiles
    ));
  }
}


?>
