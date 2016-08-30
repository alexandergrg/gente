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



 /**
  * CONSTATES DE RUTAS DE CARPETAS
  */
 define('HTML_DIR','html/');
 define('HTML_OVERALL','html/overall/');
 define('VIEWS_DIR','views/');

/**
 * CONSTANTES DE LA VIEWS-APP
 */

 define('APP_JS', VIEWS_DIR . 'app/js/');
 define('APP_CSS', VIEWS_DIR . 'app/css/');
 define('APP_IMAGES', VIEWS_DIR . 'app/images/');

 /**
  * CONSTANTES DEL NUCLEO CORE-
  */

  define('CORE_DIR','core/');
  define('CORE_MODELS','core/models/');
  define('CORE_BIN','core/bin/');

 require_once('vendor/autoload.php');
 require_once( CORE_MODELS . 'accesos.php');
 require_once( CORE_MODELS . 'Conexion.php');
 require_once( CORE_MODELS . 'ORM.php');
 
 require_once( CORE_BIN . 'functions/encrypt.php');



 ?>
