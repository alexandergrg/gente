<?php

/**
 *
 */
class Vista
{

  public static function crear($ruta,$key = null, $value= null)
  {
    //echo HTML . $ruta;

    $arrayRuta = explode('/', $ruta);
    $archivo = $arrayRuta[count($arrayRuta)-1];
    $archivoRuta = $ruta . '.php';
    //echo json_encode($value);
    //echo $key;
    //exit;
    if (file_exists(HTML . $archivoRuta)) {
      //comprobamos si existe la variable key
      if (!is_null($key)) {
        if (is_array($key)) {
          //Extrae los key y los convierte a variables para recuperarlo despues
          extract($key, EXTR_PREFIX_SAME,"");
        }else {
          // el valor que viene en $key por decir usuarios pasaría a ser una variables
          // ${$key} crea la variable $usuarios y es recibe el $value pasado por variable.
          ${$key}= $value;
        }
      }
      //echo json_encode($usu);
      require_once(HTML . $archivoRuta);
    }else{
      die ('Archivo no existe') ;
    }

  }
}



?>
