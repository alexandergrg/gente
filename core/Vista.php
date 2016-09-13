<?php

/**
 *
 */
class Vista
{

  public static function crear($ruta)
  {
    //echo HTML . $ruta;
    $arrayRuta = explode('/', $ruta);
    $archivo = $arrayRuta[count($arrayRuta)-1];
    $archivoRuta = $ruta . '.php';
    //exit;
    if (file_exists(HTML . $archivoRuta)) {
      require_once(HTML . $archivoRuta);
    }else{
      die ('Archivo no existe') ;
    }

  }
}



?>
