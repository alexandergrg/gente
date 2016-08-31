<?php
/**
 *
 */
class Ruta
{
  // Propiedad controlador que recibe un array con los controaldores
  private $_controladores= array();
  //Método constructor, que recibe el parametro de del controlador desde rutas.php
  function __construct($controlador)
  {
    $this->_controladores= $controlador;
    //var_dump($this->_controladores);
    self::submit();
  }

  public function submit(){
    //Obtiene la url del proyecto ingresada despues del ruta base
    //si esta declarada la variable uri la obtiene si no la determina como raiz
    $uri = isset($_GET['uri']) ? $_GET['uri'] : '/';

    //divide las urls, en ARRAY, dividiendoloes por '/'
    $rutasUri = explode('/',$uri);
    //var_dump($this->_controladores);

      if ($uri == '/') {
        //Por el si estamos con rutas principal
        //preguntamos si existe, key '/' que se pasa en rutas.php a los controladores
        if (array_key_exists('/',$this->_controladores)) {
            foreach ($this->_controladores as $ruta => $controller) {
              if ($ruta == '/') {
                $controlador = $controller;
              }
            }
            //echo $controlador;
            //Llamamos el metodo que recibe el controlador
            $this->setController('index',$controlador);
        }
      }else{
        //Por el no envia controladores / Métodos
        echo 'Controladores';
      }
    //var_dump($rutasUri);
  }

  public function setController($metodo,$controlador){
    $metodoController = '';
    if ($metodo =='index' || $metodo =='' || is_null($metodo)) {
      $metodoController = 'index';
    }else {
      $metodoController = $metodo;
    }
+    $this->incluirControlador($controlador);

  }

  public function incluirControlador($controlador){
    if (file_exists(CORE_CONTROLLERS . $controlador . 'php')) {
      include_once (CORE_CONTROLLERS . $controlador . 'php');
    }else{
      include_once (CORE_CONTROLLERS . 'errorController.php');
    }

  }


}


 ?>
