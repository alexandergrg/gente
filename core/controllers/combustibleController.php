<?php


class combustibleController
{

  public function index(){
    $usuariosPerfiles = ORM::getProcedure('sch_seguridad.spusuariosperfileslista');
    return Vista::crear('combustibles/index',array(
      'users'=>$usuariosPerfiles
    ));

  }
}


?>
