<?php

/**
 * Nucleo de la Aplicacón lleva las constantes.
 */

 /**
  * CONSTANTE DE LA RUTA BASE
  */
 define('APP_URL', 'http://localhost/sistema/');

 /**
 * CONSTANTES DE DISEÑO
 */
 define('APP_TITLE','SIGCOMB');
 define('APP_COPY','&copy; ' . date('Y',time()) .' Derechos Reservados. GADPP - <a href="#"> Desarrollador. Alexander González G. </a>');
 define('VIEWS_DIR', RUTA_BASE .'views/');s

//echo APP_URL . PHP_EOL . '</br>';
//echo RUTA_BASE;

 /**
  * CONSTATES DE RUTAS DE CORE
  */
 define('CORE', RUTA_BASE . 'core/');
 define('CORE_CONTROLLERS',CORE . 'controllers/');
 /**
  * CONSTATES DE RUTAS DE HTML
  */
 define('HTML',RUTA_BASE . 'html/');
 define('HTML_PUBLIC',HTML . 'public/');
 define('HTML_ERROR',HTML . 'error/');


 include_once (CORE . 'Ruta.php');
 include_once (CORE_CONTROLLERS . 'rutas.php');

// /**
//  * CONSTANTES DE LA VIEWS-APP
//  */
//
//  define('APP_JS', VIEWS_DIR . 'app/js/');
//  define('APP_CSS', VIEWS_DIR . 'app/css/');
//  define('APP_IMAGES', VIEWS_DIR . 'app/images/');
//
//  /**
//   * CONSTANTES DEL NUCLEO CORE-
//   */
//
//   define('CORE_DIR','core/');
//   define('CORE_MODELS','core/models/');
//   define('CORE_BIN','core/bin/');
//
//  require_once('vendor/autoload.php');
//  require_once( CORE_MODELS . 'accesos.php');
//  require_once( CORE_MODELS . 'Conexion.php');
//  require_once( CORE_MODELS . 'ORM.php');
//
//  require_once( CORE_BIN . 'functions/encrypt.php');



 ?>
