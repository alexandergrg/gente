<?php

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
        //echo 'son controladores';
        $estadoRuta = false;
        //echo $rutasUri[0] .'</br>';
        //echo $rutasUri[1] .'</br>';
        foreach ($this->_controladores as $ruta => $controller) {
          if (trim($ruta,'/') == $rutasUri[0]) {
            //echo 'si esxiste el controlador ' . $controller.'</br>';
            $estadoRuta = true;
            $controlador = $controller;
            if (count($rutasUri) > 1) {
            $metodo = $rutasUri[1];
            //echo  $rutasUri[1] .'</br>';
            }
            $this->setController($metodo,$controlador);
          }
        }

        if ($estadoRuta == false) {
          die ('Error en la ruta');
        }
      }
    //var_dump($rutasUri);
  }

  public function setController($metodo,$controlador){
    //echo 'si llega el método al setController' . $metodo;
    $metodoController = '';
    if ($metodo =='index' || $metodo =='' || is_null($metodo)) {
      $metodoController = 'index';
    }else {
      $metodoController = $metodo;
    }
    //echo $metodoController;
    //echo $controlador; //Incluir el controlador
    $this->incluirControlador($controlador);

    //Preguntamos si existe la clase dentro del controlador con el mismo nombre
    if (class_exists($controlador)) {
      $claseControlador = new $controlador;
      //Is Callable sirve para pregunta si el metodo existe
      if (is_callable(array($claseControlador, $metodoController))) {
        // si existe llamanos al metodo de la clase que estamos pasando
        $claseControlador->$metodoController();
      }else{
        die('el Método no existe');
      }
    }else{
      die('no existe la clase');
    }


  }

  public function incluirControlador($controlador){
    //echo 'llegue hasta incluier controladores' . $controlador;
    if (file_exists(CORE_CONTROLLERS . $controlador . '.php')) {
      include_once (CORE_CONTROLLERS . $controlador . '.php');
    }else{
      include_once (CORE_CONTROLLERS . 'errorController.php');
      //echo 'error al no existe el archivo del controlador';
      //echo CORE_CONTROLLERS .'errorControlller.php';
    }

  }


}


 ?>
