<?php


//require_once(CORE. 'Vista.php');
/**
 *
 */
class usuariosController
{

  public function index(){
    //echo 'Estoy en el metodo index delcontroladore usuarios';


    $usuPerfiles = ORM::getProcedure('spUsuariosPerfilesLista');
    //echo json_encode($usuarios);
    return Vista::crear('usuarios/index',array(
      'usuarios'=>$usuPerfiles
    ));

  }
}


?>
